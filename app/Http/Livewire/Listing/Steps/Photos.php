<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Auth;
use File;

class Photos extends Component
{
    use LivewireAlert;

    public $uploadPhoto;

    public function render()
    {
        return view('livewire.listing.steps.photos');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }
 
    public function next()
    {
        $folderAuth = Auth::user()->name . '-' . Auth::id();

        if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) ){
            $count = count( File::allFiles(storage_path('app/public/tempFilepond/' . $folderAuth)) );
            if ( $count <= 4 || $count >= 11 )
                return $this->alert('warning', "You haven't uploaded at least 5 photos!");

            $payload = [
                'to' => 'photosAll',
                'from' => 'photos',
                'img' => 'photos',
            ];
            
            $this->emitUp('next', $payload);
            return;
        }
        
        $this->alert('warning', 'You have not uploaded photos!');
    }
}
