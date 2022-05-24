<?php

namespace App\Http\Livewire\ListingTest\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingNightly extends Component
{
    use LivewireAlert;

    public $listingId;
    public $nightly;
    public $inputNightly;

    public function mount()
    {
        $this->inputNightly = $this->nightly;
    }

    public function render()
    {
        return view('livewire.listing-test.additional.listing-nightly');
    }

    public function reloadInputs()
    {
        $this->inputNightly = $this->nightly;
    }

    public function reloadInputsInvers()
    {
        $this->nightly = $this->inputNightly;
    }

    public function SubmitNightly()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputNightly' => $this->inputNightly,
        ],[
            'inputNightly' => 'required|integer|min:0|max:500',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'weekend_nightly_fee' => $this->inputNightly,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
