<?php

namespace App\Http\Livewire\ListingTest\Trip;

use App\Models\Listing\ListingCalendarAvailability;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingMinimun extends Component
{
    use LivewireAlert;

    public $listingId;
    public $minimum;
    public $custom;
    public $inputMinimun;
    public $inputCustom;

    public function mount()
    {
        $this->inputMinimun = $this->minimum;
        $this->inputCustom = $this->custom;
    }

    public function render()
    {
        return view('livewire.listing-test.trip.listing-minimun');
    }

    public function reloadInputs()
    {
        $this->inputMinimun = $this->minimum;
        $this->inputCustom = $this->custom;
    }

    public function reloadInputsInvers()
    {
        $this->minimum = $this->inputMinimun;
        $this->custom = $this->inputCustom;
    }

    public function SubmitMinimun()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputMinimun' => $this->inputMinimun,
           'inputCustom' => $this->inputCustom,
        ],[
            'inputMinimun' => 'required|integer|min:0|max:30',
            'inputCustom.*' => 'integer',
        ]);

            if ($validation->fails())
                $validation->validate();

        ListingCalendarAvailability::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'minimum_stay' => $this->inputMinimun,
            'minimum_stay_custom' => $this->inputCustom,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'trip');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
