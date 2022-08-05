<?php

namespace App\Http\Livewire\ListingTest;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Component;
use Auth;
use Str;

class PhotosAll extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $listingId;
    public $photos;
    public $images = [];
    public $inputPhotos;

    
    protected $listeners = [
        'reloadPhotos' => 'reloadPhotos'
    ];

    public function mount()
    {
        $this->preloadContent();
    }

    public function render()
    {
        return view('livewire.listing-test.photos-all');
    }

    public function preloadContent()
    {
        $this->photos = Listings::where([
            'id_listings' => $this->listingId,
            'user_id'     => Auth::id()
        ])->pluck('photos')->first();
    }

    public function reloadPhotos()
    {
        $this->preloadContent();
    }




    public function reloadInputs()
    {
        $this->inputPhotos = $this->photos;
    }

    public function reloadInputsInvers()
    {
        $this->photos = $this->inputPhotos;
    }

    public function changeArray($array, $value1, $value2)
    {
        $positionOne = array_splice($array, $value1, 1);
        $positionTwo = array_splice($array, 0, $value2);
        return array_merge( $positionTwo, $positionOne, $array );
    }
    
    public function returnCover( $payload )
    {
        $this->inputPhotos = $this->changeArray( $this->inputPhotos, $payload, 0);
    }

    public function returnUp( $payload )
    {
        $this->inputPhotos = $this->changeArray( $this->inputPhotos, $payload, $payload - 1);
    }

    public function returnDown( $payload )
    {
        $this->inputPhotos = $this->changeArray( $this->inputPhotos, $payload, $payload + 1);
    }

    public function returnDelete( $payload )
    {
        unset( $this->inputPhotos[$payload]);
    }

    public function SavePhotos()
    {
        if ( count( $this->inputPhotos ) == 0 )
            return $this->alert('warning', 'Validation has failed.!');

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->whereNotIn('status', ['in process'])->update([
            'photos' => $this->inputPhotos,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('pondReset');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
        $this->reset(['images']);
    }

    public function updateProfile()
    {
        if ( count( $this->images ) == 0 )
            return $this->alert('warning', 'You have not uploaded any image!');

        foreach ($this->images as $key => $value) {
            $nameOriginal = $value->getClientOriginalName();
            $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
            $filename = Auth::id() . '-' . Str::random(10) . '.' . $extension;

            $this->inputPhotos[] = $filename;
                $value->storeAs('uploadListing', $filename, 'public');
        }

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->whereNotIn('status', ['in process'])->update([
            'photos' => $this->inputPhotos,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('pondReset');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
        $this->reset(['images']);

    }
}
