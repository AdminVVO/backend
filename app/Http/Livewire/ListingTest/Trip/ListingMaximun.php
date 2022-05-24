<?php

namespace App\Http\Livewire\ListingTest\Trip;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingMaximun extends Component
{
    use LivewireAlert;

    public $listingId;
    public $maximun;
    public $inputMaximun;

    public function mount()
    {
        $this->inputMaximun = $this->maximun;
    }

    public function render()
    {
        return view('livewire.listing-test.trip.listing-maximun');
    }

    public function reloadInputs()
    {
        $this->inputMaximun = $this->maximun;
    }

    public function reloadInputsInvers()
    {
        $this->maximun = $this->inputMaximun;
    }

    public function SubmitMaximun()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputMaximun' => $this->inputMaximun,
        ],[
            'inputMaximun' => 'required|integer|min:0|max:30',
        ]);

            if ($validation->fails())
                $validation->validate();

        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'maximum_stay' => $this->inputMaximun,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
