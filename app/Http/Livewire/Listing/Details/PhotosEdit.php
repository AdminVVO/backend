<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listing\Listings;
use Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class PhotosEdit extends Component
{
    public $listingId;
    public $fileId;
    public $fileArray;
    public $fileEdit;
    public $inputComment;

    protected $listeners = [
        'editFile' => 'editFile'
    ];

    public function render()
    {
        return view('livewire.listing.details.photos-edit');
    }
    
    public function editFile($payload)
    {
        $this->reset(['fileId','fileEdit','fileArray','inputComment']);
        $this->fileId = $payload['file'];
        $this->fileArray = $payload['array'];

        $this->fileEdit = $payload['array'][ $this->fileId ];
            $this->inputComment = $this->fileEdit['comment'];
    }
    
    public function SubmitComment()
    {
        $this->resetValidation();    

        $validation = Validator::make([
           'inputComment' => $this->inputComment,
        ],[
            'inputComment' => 'max:250',
        ]);

            if ($validation->fails())
                $validation->validate();

        $this->fileEdit['comment'] = $this->inputComment;
        $this->fileArray[ $this->fileId ] = $this->fileEdit;

        Listings::where([
            'user_id' => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'photos' => $this->fileArray,
        ]); 

        $this->emitTo('listing.details.photos-all', 'reloadPhotos');
        $this->dispatchBrowserEvent('closeCommentModal');
        $this->reset(['fileId','fileEdit','fileArray','inputComment']);
    }
    
    public function fileDelet()
    {
        $this->emitTo('listing.details.photos-all', 'returnDelete', $this->fileId);
        $this->dispatchBrowserEvent('closeCommentModal');
        $this->reset(['fileId','fileEdit','fileArray','inputComment']);
    }
}
