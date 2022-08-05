<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Auth;
use Str;

class PhotosAll extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $listingId;
    public $photos;
    public $inputFiles;

    
    protected $listeners = [
        'reloadPhotos' => 'reloadPhotos',
        'returnDelete' => 'returnDelete'
    ];

    public function mount()
    {
        $this->preloadContent();
    }

    public function render()
    {
        return view('livewire.listing.details.photos-all');
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

    public function returnCover( $payload )
    {
        $this->photos = $this->changeArray( $this->photos, $payload, 0);
        $this->updateOptions();
    }

    public function returnUp( $payload )
    {
        $this->photos = $this->changeArray( $this->photos, $payload, $payload - 1);
        $this->updateOptions();
    }

    public function returnDown( $payload )
    {
        $this->photos = $this->changeArray( $this->photos, $payload, $payload + 1);
        $this->updateOptions();
    }

    public function returnDelete( $payload )
    {
        $xplodeListing = Listings::ListingFile( $this->listingId );
        Storage::disk('public')->delete("photos-listing/{$xplodeListing}/{$this->photos[ $payload ]['name']}");
        array_splice( $this->photos, $payload, 1);
        $this->updateOptions();
    }

    public function changeArray($array, $value1, $value2)
    {
        $positionOne = array_splice($array, $value1, 1);
        $positionTwo = array_splice($array, 0, $value2);
        return array_merge( $positionTwo, $positionOne, $array );
    }

    public function updateOptions()
    {
        Listings::where([
            'user_id' => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'photos' => $this->photos,
        ]); 

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'basic');
        $this->emitTo('listing.details.photos-cover', 'reloadPhotos');
    }

    public function updatedinputFiles($file)
    {
        $xplodeListing = Listings::ListingFile( $this->listingId );
        foreach ($file as $key => $value) {
            $nameOriginal = $value->getClientOriginalName();
            $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
            $filename = Str::random(10) . '.' . $extension;
                array_push( $this->photos, [ 'name' => $filename, 'comment' => '' ]);
                    $value->storeAs("photos-listing/{$xplodeListing}", $filename, 'public');
        }

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'photos' => $this->photos,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'basic');
        $this->emitTo('listing.details.photos-cover', 'reloadPhotos');
        $this->reset(['inputFiles']);
    }

    public function returnEdit( $payload )
    {
        $this->emitTo('listing.details.photos-edit', 'editFile', [ 'file' => $payload, 'array' => $this->photos ]);
    }





}
