<?php

namespace App\Http\Livewire\Listing\Details\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCommunity extends Component
{
    use LivewireAlert;

    public $listingId;
    public $community;
    public $type;
    public $inputCommunity;
    public $inputPorcent;

    public function mount()
    {
        $this->inputCommunity = $this->community;
        $this->inputPorcent = $this->type;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-community');
    }

    public function reloadInputs()
    {
        $this->inputCommunity = $this->community;
        $this->inputPorcent = $this->type;
    }

    public function reloadInputsInvers()
    {
        $this->community = $this->inputCommunity;
        $this->type = $this->inputPorcent;
    }

    public function SubmitCommunity()
    {      
        $this->resetValidation();

        $rule = '';

            if ( $this->inputPorcent === 'porcent')
                $rule = 'required|integer|min:0|max:100|digits_between:0,3';

            if ( $this->inputPorcent === 'currency')
                $rule = 'required|integer|min:0|max:500';

        $validation = Validator::make([
           'inputCommunity'         => $this->inputCommunity,
           'inputPorcent'         => $this->inputPorcent,
        ],[
            'inputCommunity' => $rule,
            'inputPorcent' => 'required|in:porcent,currency',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'community_fee' => $this->inputCommunity,
            'community_type' => $this->inputPorcent,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}

