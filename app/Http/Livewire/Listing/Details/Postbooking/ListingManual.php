<?php

namespace App\Http\Livewire\Listing\Details\Postbooking;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingManual extends Component
{
    use LivewireAlert;

    public $listingId;
    public $manual;
    public $inputManual;

    public function mount()
    {
        $this->inputManual = $this->manual;
    }

    public function render()
    {
        return view('livewire.listing.details.postbooking.listing-manual');
    }

    public function reloadInputs()
    {
        $this->inputManual = $this->manual;
    }

    public function reloadInputsInvers()
    {
        $this->manual = $this->inputManual;
    }

    public function SubmitManual()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputManual'     => $this->inputManual,
        ],[
            'inputManual'     => 'max:250',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'guest_manual' => $this->inputManual,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'postbooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
