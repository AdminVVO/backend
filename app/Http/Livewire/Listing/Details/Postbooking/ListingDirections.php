<?php

namespace App\Http\Livewire\Listing\Details\Postbooking;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingDirections extends Component
{
    use LivewireAlert;

    public $listingId;
    public $directions;
    public $inputDirections;

    public function mount()
    {
        $this->inputDirections = $this->directions;
    }

    public function render()
    {
        return view('livewire.listing.details.postbooking.listing-directions');
    }

    public function reloadInputs()
    {
        $this->inputDirections = $this->directions;
    }

    public function reloadInputsInvers()
    {
        $this->directions = $this->inputDirections;
    }

    public function SubmitDirections()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputDirections'     => $this->inputDirections,
        ],[
            'inputDirections'     => 'max:250',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'directions' => $this->inputDirections,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'postbooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
