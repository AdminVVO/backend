<?php

namespace App\Http\Livewire\Listing\Details\Arrival;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingInstruct extends Component
{
    use LivewireAlert;

    public $listingId;
    public $instruction;
    public $inputInstruct;

    public function mount()
    {
        $this->inputInstruct = $this->instruction;
    }

    public function render()
    {
        return view('livewire.listing.details.arrival.listing-instruct');
    }

    public function reloadInputs()
    {
        $this->inputInstruct = $this->instruction;
    }

    public function reloadInputsInvers()
    {
        $this->instruction = $this->inputInstruct;
    }

    public function SubmitInstruct()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputInstruct'     => $this->inputInstruct,
        ],[
            'inputInstruct'     => 'required|in:Smart lock,Keypad,Lockbox,Building staff,Host greets you,Other',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'arrival_instructions' => $this->inputInstruct,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'postbooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
