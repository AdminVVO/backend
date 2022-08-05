<?php

namespace App\Http\Livewire\Listing\Details\Calendar;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingChecketout extends Component
{
    use LivewireAlert;

    public $listingId;
    public $checketout;
    public $inputChecketout;

    public function mount()
    {
        $this->inputChecketout = $this->checketout;
    }

    public function render()
    {
        return view('livewire.listing.details.calendar.listing-checketout');
    }

    public function reloadInputs()
    {
        $this->inputChecketout = $this->checketout;
    }

    public function reloadInputsInvers()
    {
        $this->checketout = $this->inputChecketout;
    }

    public function SubmitChecketout()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputChecketout' => $this->inputChecketout,
        ],[
            'inputChecketout' => 'array',
            'inputChecketout.*' => 'in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'restricted_checkout_days' => $this->inputChecketout,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}