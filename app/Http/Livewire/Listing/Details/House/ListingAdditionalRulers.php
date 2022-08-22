<?php

namespace App\Http\Livewire\Listing\Details\House;

use App\Models\Listing\ListingHouseRulers;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingAdditionalRulers extends Component
{
    use LivewireAlert;

    public $listingId;
    public $additional;
    public $inputAdditional;

    public function mount()
    {
        $this->inputAdditional = $this->additional;
    }

    public function render()
    {
        return view('livewire.listing.details.house.listing-additional-rulers');
    }

    public function reloadInputs()
    {
        $this->inputAdditional = $this->additional;
    }

    public function reloadInputsInvers()
    {
        $this->additional = $this->inputAdditional;
    }

    public function SubmitAdditional()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputAdditional'     => $this->inputAdditional,
        ],[
            'inputAdditional'     => 'max:250',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'additional_rules' => $this->inputAdditional,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'house');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
