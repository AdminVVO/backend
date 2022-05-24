<?php

namespace App\Http\Livewire\ListingTest\Pricing;

use App\Models\Currencs;
use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCurrency extends Component
{
    use LivewireAlert;

    public $listingId;
    public $currency;
    public $inputCurrency;
    public $arrayCurrency;

    public function mount()
    {
        $this->inputCurrency = $this->currency;
        $this->arrayCurrency = Currencs::pluck('name', 'code');
    }

    public function render()
    {
        return view('livewire.listing-test.pricing.listing-currency');
    }

    public function reloadInputs()
    {
        $this->inputCurrency = $this->currency;
    }

    public function reloadInputsInvers()
    {
        $this->currency = $this->inputCurrency;
    }

    public function SubmitCurrency()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputCurrency'    => $this->inputCurrency,
        ],[
            'inputCurrency' => 'required|exists:currencs,code',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'listing_currency' => $this->inputCurrency,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'pricingbase');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
