<?php

namespace App\Http\Livewire\ListingTest\Basic;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingDescription extends Component
{
    use LivewireAlert;

    public $listingId;
    public $descriptions;
    public $space;
    public $guest_access;
    public $other_details;

    public $inputDescriptions;
    public $inputSpace;
    public $inputGuest;
    public $inputOther;

    public function mount()
    {
        $this->inputDescriptions = $this->descriptions;
        $this->inputSpace        = $this->space;
        $this->inputGuest        = $this->guest_access;
        $this->inputOther        = $this->other_details;
    }

    public function render()
    {
        return view('livewire.listing-test.basic.listing-description');
    }

    public function reloadInputs()
    {
        $this->inputDescriptions = $this->descriptions;
        $this->inputSpace        = $this->space;
        $this->inputGuest        = $this->guest_access;
        $this->inputOther        = $this->other_details;
    }

    public function reloadInputsInvers()
    {
        $this->descriptions = $this->inputDescriptions;
        $this->space = $this->inputSpace;
        $this->guest_access = $this->inputGuest;
        $this->other_details = $this->inputOther;
    }

    public function SubmitDescription()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputDescriptions' => $this->inputDescriptions,
           'inputSpace'        => $this->inputSpace,
           'inputGuest'        => $this->inputGuest,
           'inputOther'        => $this->inputOther,
        ],[
            'inputDescriptions' => 'required|max:500',
            'inputSpace'        => 'max:500',
            'inputGuest'        => 'max:500',
            'inputOther'        => 'max:500',
        ]);

            if ($validation->fails())
                $validation->validate();

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->whereNotIn('status', ['in process'])->update([
            'descriptions'  => $this->inputDescriptions,
            'space'         => $this->inputSpace != null ? $this->inputSpace : null,
            'guest_access'  => $this->inputGuest != null ? $this->inputGuest : null,
            'other_details' => $this->inputOther != null ? $this->inputOther : null,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
