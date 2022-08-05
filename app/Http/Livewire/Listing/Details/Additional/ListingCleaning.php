<?php

namespace App\Http\Livewire\Listing\Details\Additional;


use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCleaning extends Component
{
    use LivewireAlert;

    public $listingId;
    public $cleaning;
    public $inputCleaning;

    public function mount()
    {
        $this->inputCleaning = $this->cleaning;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-cleaning');
    }

    public function reloadInputs()
    {
        $this->inputCleaning = $this->cleaning;
    }

    public function reloadInputsInvers()
    {
        $this->cleaning = $this->inputCleaning;
    }

    public function SubmitCleaning()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputCleaning' => $this->inputCleaning,
        ],[
            'inputCleaning' => 'required|integer|min:0|max:500',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'cleaning_fee' => $this->inputCleaning,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
