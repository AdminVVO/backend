<?php

namespace App\Http\Livewire\ListingTest\Basic;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingLink extends Component
{
    use LivewireAlert;

    public $listingId;
    public $custom_link;
    public $inputLink;

    public function mount()
    {
        $this->inputLink = $this->custom_link;
    }

    public function render()
    {
        return view('livewire.listing-test.basic.listing-link');
    }

    public function reloadInputs()
    {
        $this->inputLink = $this->custom_link;
    }

    public function reloadInputsInvers()
    {
        $this->custom_link = $this->inputLink;
    }

    public function SubmitLink()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputLink' => $this->inputLink,
        ],[
            'inputLink' => 'required|max:50',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'custom_link' => $this->inputLink,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
