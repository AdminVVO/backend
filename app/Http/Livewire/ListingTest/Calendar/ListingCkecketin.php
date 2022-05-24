<?php

namespace App\Http\Livewire\ListingTest\Calendar;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCkecketin extends Component
{
    use LivewireAlert;

    public $listingId;
    public $checkin;
    public $inputChecketin;

    public function mount()
    {
        $this->inputChecketin = $this->checkin;
    }

    public function render()
    {
        return view('livewire.listing-test.calendar.listing-ckecketin');
    }

    public function reloadInputs()
    {
        $this->inputChecketin = $this->checkin;
    }

    public function reloadInputsInvers()
    {
        $this->checkin = $this->inputChecketin;
    }

    public function SubmitChecketin()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputChecketin' => $this->inputChecketin,
        ],[
            'inputChecketin' => 'array',
            'inputChecketin.*' => 'in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'restricted_checkin_days' => $this->inputChecketin,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}