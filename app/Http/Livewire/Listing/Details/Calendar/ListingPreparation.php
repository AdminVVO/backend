<?php

namespace App\Http\Livewire\Listing\Details\Calendar;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingPreparation extends Component
{
    use LivewireAlert;

    public $listingId;
    public $preparation;
    public $inputPreparation;

    public function mount()
    {
        $this->inputPreparation = $this->preparation;
    }

    public function render()
    {
        return view('livewire.listing.details.calendar.listing-preparation');
    }

    public function reloadInputs()
    {
        $this->inputPreparation = $this->preparation;
    }

    public function reloadInputsInvers()
    {
        $this->preparation = $this->inputPreparation;
    }

    public function SubmitPreparation()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputPreparation' => $this->inputPreparation,
        ],[
            'inputPreparation' => 'required|in:0,1,2,3,4,5',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'preparation_time' => $this->inputPreparation,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
