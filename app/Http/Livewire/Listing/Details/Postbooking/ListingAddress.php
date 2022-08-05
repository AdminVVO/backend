<?php

namespace App\Http\Livewire\Listing\Details\Postbooking;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingAddress extends Component
{
    use LivewireAlert;

    public $listingId;
    public $address;
    public $inputCountry;
    public $inputStreet;
    public $inputCity;
    public $inputState;
    public $inputZipcode;

    public function mount()
    {
        $this->inputCountry = $this->address['country'];
        $this->inputStreet  = $this->address['street'];
        $this->inputCity    = $this->address['city'];
        $this->inputState   = $this->address['state'];
        $this->inputZipcode = $this->address['zip_code'];
    }

    public function render()
    {
        return view('livewire.listing.details.postbooking.listing-address');
    }

    public function reloadInputs()
    {
        $this->inputCountry = $this->address['country'];
        $this->inputStreet  = $this->address['street'];
        $this->inputCity    = $this->address['city'];
        $this->inputState   = $this->address['state'];
        $this->inputZipcode = $this->address['zip_code'];
    }

    public function reloadInputsInvers()
    {
        $this->address['country'] = $this->inputCountry;
        $this->address['street'] = $this->inputStreet;
        $this->address['city'] = $this->inputCity;
        $this->address['state'] = $this->inputState;
        $this->address['zip_code'] = $this->inputZipcode;
    }

    public function SubmitAddress()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputCountry' => $this->inputCountry,
           'inputStreet'  => $this->inputStreet,
           'inputCity'    => $this->inputCity,
           'inputState'   => $this->inputState,
           'inputZipcode' => $this->inputZipcode,
        ],[
            'inputCountry' => 'required',
            'inputStreet'  => 'required',
            'inputCity'    => 'required',
            'inputState'   => 'required',
            'inputZipcode' => 'required|regex:/^[0-9]+$/',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'country'  => $this->inputCountry,
            'street'   => $this->inputStreet,
            'city'     => $this->inputCity,
            'state'    => $this->inputState,
            'zip_code' => $this->inputZipcode,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'postbooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
