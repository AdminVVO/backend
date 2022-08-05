<?php

namespace App\Http\Livewire\Listing\Details\Discount;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingEarly extends Component
{
    use LivewireAlert;

    public $listingId;
    public $early;
    public $porcent;
    public $inputEarly;
    public $inputPorcent;

    public function mount()
    {
        $this->inputEarly = $this->early;
        $this->inputPorcent = $this->porcent;
    }

    public function render()
    {
        return view('livewire.listing.details.discount.listing-early');
    }

    public function reloadInputs()
    {
        $this->inputEarly = $this->early;
        $this->inputPorcent = $this->porcent;
    }

    public function reloadInputsInvers()
    {
        $this->early = $this->inputEarly;
        $this->porcent = $this->inputPorcent;
    }

    public function SubmitEarly()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputEarly'   => $this->inputEarly,
           'inputPorcent' => $this->inputPorcent,
        ],[
            'inputEarly'   => 'required|in:0,1,2,3,4,5',
            'inputPorcent' => 'required|integer|min:0|max:100|digits_between:0,3',
        ]);

            if ($validation->fails())
                $validation->validate();

        $validation->sometimes('inputPorcent', 'required|integer|min:1|max:100|digits_between:0,3', function($input){
            return $input->inputEarly >= 1;
        });
            if ($validation->fails())
                $validation->validate();
        
        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'early_bird_discount'         => $this->inputEarly != 0 ? $this->inputEarly : null,
            'early_bird_discount_porcent' => $this->inputPorcent != 0 ? $this->inputPorcent : 0,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'discont');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}