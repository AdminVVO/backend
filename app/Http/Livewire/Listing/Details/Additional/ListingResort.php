<?php

namespace App\Http\Livewire\Listing\Details\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingResort extends Component
{
    use LivewireAlert;

    public $listingId;
    public $resort;
    public $type;
    public $inputResort;
    public $inputPorcent;

    public function mount()
    {
        $this->inputResort = $this->resort;
        $this->inputPorcent = $this->type;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-resort');
    }

    public function reloadInputs()
    {
        $this->inputResort = $this->resort;
        $this->inputPorcent = $this->type;
    }

    public function reloadInputsInvers()
    {
        $this->resort = $this->inputResort;
        $this->type = $this->inputPorcent;
    }

    public function SubmitResort()
    {      
        $this->resetValidation();

        $rule = '';

            if ( $this->inputPorcent === 'porcent')
                $rule = 'required|integer|min:0|max:100|digits_between:0,3';

            if ( $this->inputPorcent === 'currency')
                $rule = 'required|integer|min:0|max:500';

        $validation = Validator::make([
           'inputResort'         => $this->inputResort,
           'inputPorcent'         => $this->inputPorcent,
        ],[
            'inputResort' => $rule,
            'inputPorcent' => 'required|in:porcent,currency',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'resort_fee' => $this->inputResort,
            'resort_type' => $this->inputPorcent,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
