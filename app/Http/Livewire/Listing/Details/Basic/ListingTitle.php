<?php

namespace App\Http\Livewire\Listing\Details\Basic;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingTitle extends Component
{
    use LivewireAlert;

    public $listingId;
    public $title;
    public $internal_title;
    public $inputTitle;
    public $inputInternal;

    public function mount()
    {
        $this->inputTitle = $this->title;
        $this->inputInternal = $this->internal_title;
    }

    public function render()
    {
        return view('livewire.listing.details.basic.listing-title');
    }

    public function reloadInputs()
    {
        $this->inputTitle = $this->title;
        $this->inputInternal = $this->internal_title;
    }

    public function reloadInputsInvers()
    {
        $this->title = $this->inputTitle;
        $this->internal_title = $this->inputInternal;
    }

    public function SubmitTitle()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputTitle' => $this->inputTitle,
           'inputInternal' => $this->inputInternal,
        ],[
            'inputTitle' => 'required|max:50',
            'inputInternal' => 'required|max:50',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'title'          => $this->inputTitle,
            'internal_title' => $this->inputInternal,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
