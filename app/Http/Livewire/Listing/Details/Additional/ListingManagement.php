<?php

namespace App\Http\Livewire\Listing\Details\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingManagement extends Component
{
    use LivewireAlert;

    public $listingId;
    public $management;
    public $type;
    public $inputManagement;
    public $inputPorcent;

    public function mount()
    {
        $this->inputManagement = $this->management;
        $this->inputPorcent = $this->type;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-management');
    }

    public function reloadInputs()
    {
        $this->inputManagement = $this->management;
        $this->inputPorcent = $this->type;
    }

    public function reloadInputsInvers()
    {
        $this->management = $this->inputManagement;
        $this->type = $this->inputPorcent;
    }

    public function SubmitManagement()
    {      
        $this->resetValidation();

        $rule = '';

            if ( $this->inputPorcent === 'porcent')
                $rule = 'required|integer|min:0|max:100|digits_between:0,3';

            if ( $this->inputPorcent === 'currency')
                $rule = 'required|integer|min:0|max:500';

        $validation = Validator::make([
           'inputManagement'         => $this->inputManagement,
           'inputPorcent'         => $this->inputPorcent,
        ],[
            'inputManagement' => $rule,
            'inputPorcent' => 'required|in:porcent,currency',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'management_fee' => $this->inputManagement,
            'management_type' => $this->inputPorcent,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}

