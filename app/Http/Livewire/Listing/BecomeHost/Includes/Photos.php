<?php

namespace App\Http\Livewire\Listing\BecomeHost\Includes;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Str;

class Photos extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    
    public $images = [];
    public $inputPhotos = [];

    protected $listeners = [
        'loadPhotos',
    ];

    public function render()
    {
        return view('livewire.listing.become-host.includes.photos');
    }

    public function loadPhotos()
    {
        if ( count( $this->images ) == 0 )
            return $this->alert('warning', 'You have not uploaded any image!');

        if ( count( $this->images ) <= 4 )
            return $this->alert('warning', 'You must upload at least 5 images!');

        $this->reset(['inputPhotos']);

        foreach ( $this->images as $key => $value ) {
            $nameOriginal = $value->getClientOriginalName();
            $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
            $filename = Str::random(10) . '.' . $extension;

            $this->inputPhotos[] = $filename;
                $value->storeAs('photos-pre-listing', $filename, 'public');
        }

        $this->emitUp('receivePhotos', $this->inputPhotos);
    }
}
