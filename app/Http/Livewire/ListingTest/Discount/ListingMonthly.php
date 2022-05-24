<?php

namespace App\Http\Livewire\ListingTest\Discount;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingMonthly extends Component
{
    use LivewireAlert;

    public $listingId;
    public $monthly;
    public $inputMonthly;

    public function mount()
    {
        $this->inputMonthly = $this->monthly;
    }

    public function render()
    {
        return view('livewire.listing-test.discount.listing-monthly');
    }
    
    public function reloadInputs()
    {
        $this->inputMonthly = $this->monthly;
    }

    public function reloadInputsInvers()
    {
        $this->monthly = $this->inputMonthly;
    }

    public function SubmitMonthly()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
            'inputMonthly' => $this->inputMonthly,
        ],[
            'inputMonthly' => 'required|integer|min:0|max:100|digits_between:0,3',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'monthly_discount' => $this->inputMonthly,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'discont');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}