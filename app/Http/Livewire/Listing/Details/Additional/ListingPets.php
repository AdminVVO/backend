<?php

namespace App\Http\Livewire\Listing\Details\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingPets extends Component
{
    use LivewireAlert;

    public $listingId;
    public $pet;
    public $inputPet;

    public function mount()
    {
        $this->inputPet = $this->pet;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-pets');
    }

    public function reloadInputs()
    {
        $this->inputPet = $this->pet;
    }

    public function reloadInputsInvers()
    {
        $this->pet = $this->inputPet;
    }

    public function SubmitPet()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputPet' => $this->inputPet,
        ],[
            'inputPet' => 'required|integer|min:0|max:500',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'pet_fee' => $this->inputPet,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
