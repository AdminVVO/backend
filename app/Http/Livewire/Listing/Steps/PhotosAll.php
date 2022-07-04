<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Auth;
use File;
use Storage;

class PhotosAll extends Component
{
    use LivewireAlert;
    
    public $collecPhotos = [];
    public $collect = [];

    public function mount()
    {
        $folderAuth = Auth::id();
        $listContents = Storage::disk('uploadTempFilepond')->listContents( $folderAuth );

        foreach ($listContents as $key => $value) {
            $this->collect[ $key ] = $value['basename'];
        }
        
        foreach ($this->collect as $key => $value) {
            $this->collecPhotos[ $key ]['id'] = $value;
            $this->collecPhotos[ $key ]['url'] = $folderAuth . '/' .$value;
        }
    }

    public function render()
    {
        return view('livewire.listing.steps.photos-all');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }
 
    public function next()
    {
        foreach ($this->collecPhotos as $key => $value) {
            $content[ $key ] = Auth::id() . '/' . $value['id'];
        }

        $payload = [
            'to' => 'describeToPlacesTitle',
            'from' => 'photosAll',
            'content' => $content,
            'img' => 'describeToPlacesTitle',
        ];
        
        $this->emitUp('next', $payload);
    }
 
    public function changeCover($payload)
    {
        $folderAuth = Auth::id();

        $position = array_search( $payload, $this->collect );
        $this->collect = $this->changeArray( $this->collect, $position, 0);

        foreach ($this->collect as $key => $value) {
            $this->collecPhotos[ $key ]['id'] = $value;
            $this->collecPhotos[ $key ]['url'] = $folderAuth . '/' .$value;
        }
    }
 
    public function changeDown($payload)
    {
        $folderAuth = Auth::id();

        $position = array_search( $payload, $this->collect );
        $this->collect = $this->changeArray( $this->collect, $position, $position + 1);

        foreach ($this->collect as $key => $value) {
            $this->collecPhotos[ $key ]['id'] = $value;
            $this->collecPhotos[ $key ]['url'] = $folderAuth . '/' .$value;
        }
    }
 
    public function changeUp($payload)
    {
        $folderAuth = Auth::id();
        
        $position = array_search( $payload, $this->collect );
        $this->collect = $this->changeArray( $this->collect, $position, $position - 1);

        foreach ($this->collect as $key => $value) {
            $this->collecPhotos[ $key ]['id'] = $value;
            $this->collecPhotos[ $key ]['url'] = $folderAuth . '/' .$value;
        }
    }

    public function changeArray($array, $value1, $value2)
    {
        $positionOne = array_splice($array, $value1, 1);
        $positionTwo = array_splice($array, 0, $value2);
        return array_merge( $positionTwo, $positionOne, $array );
    }
}