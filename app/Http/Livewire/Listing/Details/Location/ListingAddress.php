<?php

namespace App\Http\Livewire\Listing\Details\Location;

use App\Models\Listing\ListingLocation;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingAddress extends Component
{
    use LivewireAlert;

    public $listingId;
    public $country;
    public $street;
    public $city;
    public $state;
    public $zip_code;
    public $inputCountry;
    public $inputStreet;
    public $inputCity;
    public $inputState;
    public $inputZipcode;

    public function mount()
    {
        $this->inputCountry = $this->country;
        $this->inputStreet  = $this->street;
        $this->inputCity    = $this->city;
        $this->inputState   = $this->state;
        $this->inputZipcode = $this->zip_code;
    }

    public function render()
    {
        return view('livewire.listing.details.location.listing-address');
    }

    public function reloadInputs()
    {
        $this->inputCountry = $this->country;
        $this->inputStreet  = $this->street;
        $this->inputCity    = $this->city;
        $this->inputState   = $this->state;
        $this->inputZipcode = $this->zip_code;
    }

    public function reloadInputsInvers()
    {
        $this->country  = $this->inputCountry;
        $this->street   = $this->inputStreet;
        $this->city     = $this->inputCity;
        $this->state    = $this->inputState;
        $this->zip_code = $this->inputZipcode;
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
        
        ListingLocation::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'country'  => $this->inputCountry,
            'street'   => $this->inputStreet,
            'city'     => $this->inputCity,
            'state'    => $this->inputState,
            'zip_code' => $this->inputZipcode,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'location');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
