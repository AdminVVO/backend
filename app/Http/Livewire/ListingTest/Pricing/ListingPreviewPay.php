<?php

namespace App\Http\Livewire\ListingTest\Pricing;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingPreviewPay extends Component
{
    use LivewireAlert;

    public $listingId;
    public $max_people;
    public $allow;
    public $inputMax;
    public $inputAllow;

    public function mount()
    {
        $this->inputMax = $this->max_people;
        $this->inputAllow = $this->allow;
    }

    public function render()
    {
        return view('livewire.listing-test.pricing.listing-preview-pay');
    }

    public function reloadInputs()
    {
        $this->inputMax = $this->max_people;
        $this->inputAllow = $this->allow;
    }

    public function reloadInputsInvers()
    {
        $this->max_people = $this->inputMax;
        $this->allow = $this->inputAllow;
    }

    public function buttonIncrease()
    {
        if ( $this->inputMax >= 5 ) 
            return;

        $this->inputMax = $this->inputMax + 1;
    }

    public function buttonDecrease()
    {
        if ( $this->inputMax <= 0 ) 
            return;

        $this->inputMax = $this->inputMax - 1;
    }   

    public function SubmitAllow()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputAllow'    => $this->inputAllow,
        ],[
            'inputAllow.*' => 'in:Children,Infants',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'Update has failed!');
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'max_people' => $this->inputMax,
            'allow' => $this->inputAllow,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'pricingbase');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
