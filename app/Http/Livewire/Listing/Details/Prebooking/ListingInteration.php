<?php

namespace App\Http\Livewire\Listing\Details\Prebooking;

use App\Models\Listing\ListingBookingDetails;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingInteration extends Component
{
    use LivewireAlert;

    public $listingId;
    public $interation;
    public $comment;
    public $inputInteration;
    public $inputComment;

    public function mount()
    {
        $this->inputInteration = $this->interation;
        $this->inputComment = $this->comment;
    }

    public function render()
    {
        return view('livewire.listing.details.prebooking.listing-interation');
    }

    public function reloadInputs()
    {
        $this->inputInteration = $this->interation;
        $this->inputComment = $this->comment;
    }

    public function reloadInputsInvers()
    {
        $this->interation = $this->inputInteration;
        $this->comment = $this->inputComment;
    }

    public function SubmitInteration()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputInteration'     => $this->inputInteration,
           'inputComment'     => $this->inputComment,
        ],[
            'inputInteration'     => 'required|in:I plan,I give,I wont',
            'inputComment'     => 'max:250',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingBookingDetails::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'interaction_with_guests' => $this->inputInteration,
            'interaction_with_guests_comment' => $this->inputComment,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'prebooking');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
