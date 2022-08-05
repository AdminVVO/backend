<?php

namespace App\Http\Livewire\Listing\Details\Discount;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingWeekly extends Component
{
    use LivewireAlert;

    public $listingId;
    public $weekly;
    public $inputWeekly;

    public function mount()
    {
        $this->inputWeekly = $this->weekly;
    }

    public function render()
    {
        return view('livewire.listing.details.discount.listing-weekly');
    }

    public function reloadInputs()
    {
        $this->inputWeekly = $this->weekly;
    }

    public function reloadInputsInvers()
    {
        $this->weekly = $this->inputWeekly;
    }

    public function SubmitWeekly()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
            'inputWeekly' => $this->inputWeekly,
        ],[
            'inputWeekly' => 'required|integer|min:0|max:100|digits_between:0,3',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'weekly_discount' => $this->inputWeekly,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'discont');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
