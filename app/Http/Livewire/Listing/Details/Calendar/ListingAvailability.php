<?php

namespace App\Http\Livewire\Listing\Details\Calendar;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingAvailability extends Component
{
    use LivewireAlert;

    public $listingId;
    public $availability;
    public $inputAvailability;

    public function mount()
    {
        $this->inputAvailability = $this->availability;
    }

    public function render()
    {
        return view('livewire.listing.details.calendar.listing-availability');
    }

    public function reloadInputs()
    {
        $this->inputAvailability = $this->availability;
    }

    public function reloadInputsInvers()
    {
        $this->availability = $this->inputAvailability;
    }

    public function SubmitAvailability()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputAvailability' => $this->inputAvailability,
        ],[
            'inputAvailability' => 'required|in:0,1,2,3,4,5',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'availability_window' => $this->inputAvailability,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}

