<?php

namespace App\Http\Livewire\Listing\Details\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingLines extends Component
{
    use LivewireAlert;

    public $listingId;
    public $lines;
    public $inputLines;

    public function mount()
    {
        $this->inputLines = $this->lines;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-lines');
    }

    public function reloadInputs()
    {
        $this->inputLines = $this->lines;
    }

    public function reloadInputsInvers()
    {
        $this->lines = $this->inputLines;
    }

    public function SubmitLines()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputLines' => $this->inputLines,
        ],[
            'inputLines' => 'required|integer|min:0|max:500',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'linens_fee' => $this->inputLines,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
