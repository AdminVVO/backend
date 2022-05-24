<?php

namespace App\Http\Livewire\ListingTest\Calendar;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingNotice extends Component
{
    use LivewireAlert;

    public $listingId;
    public $notice;
    public $inputNotice;

    public function mount()
    {
        $this->inputNotice = $this->notice;
    }

    public function render()
    {
        return view('livewire.listing-test.calendar.listing-notice');
    }

    public function reloadInputs()
    {
        $this->inputNotice = $this->notice;
    }

    public function reloadInputsInvers()
    {
        $this->notice = $this->inputNotice;
    }

    public function SubmitNotice()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputNotice' => $this->inputNotice,
        ],[
            'inputNotice' => 'required|in:0,1,2,3,4,5,6,7',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'advance_notice' => $this->inputNotice,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}