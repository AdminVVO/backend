<?php

namespace App\Http\Livewire\Listing\Details\Additional;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingExtraGuest extends Component
{
    use LivewireAlert;

    public $listingId;
    public $quanty;
    public $extra;
    public $inputExtra;
    public $inputQuanty;

    public $disableButton = [
        'IncreaseGuest' => false,
        'DecreaseGuest' => false,
    ];

    public function mount()
    {
        $this->inputExtra = $this->extra;
        $this->inputQuanty = $this->quanty;
        
        if ( $this->inputQuanty >= 5 ) 
            $this->disableButton['IncreaseGuest'] = true;
            
        if ( $this->inputQuanty <= 0 ) 
            $this->disableButton['DecreaseGuest'] = true;
    }

    public function render()
    {
        return view('livewire.listing.details.additional.listing-extra-guest');
    }

    public function reloadInputs()
    {
        $this->inputExtra = $this->extra;
        $this->inputQuanty = $this->quanty;
    }

    public function reloadInputsInvers()
    {
        $this->extra = $this->inputExtra;
        $this->quanty = $this->inputQuanty;

    }

    public function SubmitExtra()
    {      
        $this->resetValidation();

        $validation = Validator::make([
           'inputExtra' => $this->inputExtra,
           'inputQuanty'     => $this->inputQuanty,
        ],[
            'inputExtra' => 'required|integer|min:0|max:500',
            'inputQuanty' => 'required|integer|min:0|max:5',
        ]);

            if ($validation->fails())
                $validation->validate();

        $validation->sometimes('inputExtra', 'required|integer|min:1|max:500', function($input){
            return $input->inputQuanty >= 1;
        });
            if ($validation->fails())
                $validation->validate();

        if ( $this->inputQuanty == 0 )
            $this->inputExtra = 0;
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'extra_guest_fee' => $this->inputExtra,
            'extra_guest' => $this->inputQuanty,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'additional');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }

    public function increaseGuest()
    {
        if ( $this->inputQuanty >= 5 ) 
            return;

        $this->inputQuanty = $this->inputQuanty + 1;

        $this->disableButton['DecreaseGuest'] = false;

        if ( $this->inputQuanty >= 5 ) 
            $this->disableButton['IncreaseGuest'] = true;
    }

    public function decreaseGuest()
    {
        if ( $this->inputQuanty <= 0 ) 
            return;

        $this->inputQuanty = $this->inputQuanty - 1;

        $this->disableButton['IncreaseGuest'] = false;

        if ( $this->inputQuanty <= 0 ) 
            $this->disableButton['DecreaseGuest'] = true;
        }
}

