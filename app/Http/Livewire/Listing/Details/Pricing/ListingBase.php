<?php

namespace App\Http\Livewire\Listing\Details\Pricing;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingBase extends Component
{
    use LivewireAlert;

    public $listingId;
    public $base;
    public $inputBase;

    public function mount()
    {
        $this->inputBase = $this->base;
    }

    public function render()
    {
        return view('livewire.listing.details.pricing.listing-base');
    }

    public function reloadInputs()
    {
        $this->inputBase = $this->base;
    }

    public function reloadInputsInvers()
    {
        $this->base = $this->inputBase;
    }

    public function SubmitBase()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputBase'    => $this->inputBase,
        ],[
            'inputBase' => 'required|integer',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'base_price' => $this->inputBase,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'pricingbase');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
