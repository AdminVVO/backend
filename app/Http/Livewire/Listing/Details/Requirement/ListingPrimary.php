<?php

namespace App\Http\Livewire\Listing\Details\Requirement;

use App\Models\Listing\ListingHouseRulers;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingPrimary extends Component
{
    use LivewireAlert;

    public $listingId;
    public $primary;
    public $inputPrimary;

    public function mount()
    {
        $this->inputPrimary = $this->primary;
    }

    public function render()
    {
        return view('livewire.listing.details.requirement.listing-primary');
    }

    public function reloadInputs()
    {
        $this->inputPrimary = $this->primary;
    }

    public function reloadInputsInvers()
    {
        $this->primary = $this->inputPrimary;
    }

    public function SubmitPrimary()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputPrimary'     => $this->inputPrimary,
        ],[
            'inputPrimary'     => 'required|in:guests,personal',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'primary_listing' => $this->inputPrimary,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'house');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
