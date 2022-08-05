<?php

namespace App\Http\Livewire\Listing\Details\Prebooking;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCheckout extends Component
{
    use LivewireAlert;

    public $listingId;
    public $out;
    public $inputOut;
    public $inputOutType;
    public $time;

    public function mount()
    {
        $this->inputOut = $this->out['time'];
        $this->inputOutType = $this->out['type'];

        for ($i = 1; $i <= 12; $i++)
            $this->time[] = $i . ':00';
    }

    public function render()
    {
        return view('livewire.listing.details.prebooking.listing-checkout');
    }

    public function reloadInputs()
    {
        $this->inputOut = $this->out['time'];
        $this->inputOutType = $this->out['type'];
    }

    public function reloadInputsInvers()
    {
        $this->out['time'] = $this->inputOut;
        $this->out['type'] = $this->inputOutType;
    }

    public function SubmitCheckOut()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputOut'     => $this->inputOut,
           'inputOutType' => $this->inputOutType,
        ],[
            'inputOut'     => 'required|in:' . implode(',', $this->time),
            'inputOutType' => 'required|in:AM,PM',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'checkout_time' => [
                'time' => $this->inputOut,
                'type' => $this->inputOutType,
            ]
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'prebooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
