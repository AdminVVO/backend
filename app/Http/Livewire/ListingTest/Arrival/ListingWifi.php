<?php

namespace App\Http\Livewire\ListingTest\Arrival;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingWifi extends Component
{
    use LivewireAlert;

    public $listingId;
    public $wifi;
    public $inputWifi;

    public function mount()
    {
        $this->inputWifi = $this->wifi;
    }

    public function render()
    {
        return view('livewire.listing-test.arrival.listing-wifi');
    }

    public function reloadInputs()
    {
        $this->inputWifi = $this->wifi;
    }

    public function reloadInputsInvers()
    {
        $this->wifi = $this->inputWifi;
    }

    public function SubmitWifi()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputWifi'     => $this->inputWifi,
        ],[
            'inputWifi'     => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'wifi_details' => $this->inputWifi,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'postbooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
