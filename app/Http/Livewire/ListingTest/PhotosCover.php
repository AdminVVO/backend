<?php

namespace App\Http\Livewire\ListingTest;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Component;
use Auth;
use Str;

class PhotosCover extends Component
{
    use WithFileUploads;

    public $listingId;
    public $photos;    
    public $inputCover = 0;    
    public $inputUploadCover;

    public function mount()
    {
        $this->preloadContent();
    }

    public function render()
    {
        return view('livewire.listing-test.photos-cover');
    }

    public function preloadContent()
    {
        $this->photos = Listings::where([
            'id_listings' => $this->listingId,
            'user_id'     => Auth::id()
        ])->pluck('photos')->first();
    }

    public function SubmitCover()
    {
        $collect = $this->changeArray( $this->photos, $this->inputCover, 0);

        Listings::where([
            'user_id' => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'photos' => $collect,
        ]); 

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->emitTo('listing-test.photos-all', 'reloadPhotos');
        $this->dispatchBrowserEvent('closeCoverModal');
        $this->photos = $collect;
        $this->reset(['inputCover','inputUploadCover']);
    }

    public function changeArray($array, $value1, $value2)
    {
        $positionOne = array_splice($array, $value1, 1);
        $positionTwo = array_splice($array, 0, $value2);
        return array_merge( $positionTwo, $positionOne, $array );
    }

    public function updatingInputUploadCover($value)
    {
        $this->resetValidation();  

        $validation = Validator::make([
           'inputUploadCover' => $value,
        ],[
            'inputUploadCover' => 'image|mimes:jpeg,jpg,png|max:2000',
        ]);

            if ($validation->fails())
                $validation->validate();

        $nameOriginal = $value->getClientOriginalName();
        $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
        $filename = Auth::id() . '/' . Str::random(10) . '.' . $extension;
            array_unshift($this->photos, $filename);

            $value->storeAs('uploadListing', $filename, 'public');

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'photos' => $this->photos,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->emitTo('listing-test.photos-all', 'reloadPhotos');
        $this->dispatchBrowserEvent('closeCoverModal');
        $this->reset(['inputCover','inputUploadCover']);
    }


}
