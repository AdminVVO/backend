<?php

namespace App\Http\Livewire\Listing\Details\Policies;

use App\Models\Listing\ListingPolicies;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingInstantBook extends Component
{
    use LivewireAlert;

    public $listingId;
    public $instant_book;
    public $inputBook;

    public function mount()
    {
        $this->inputBook = $this->instant_book;
    }

    public function render()
    {
        return view('livewire.listing.details.policies.listing-instant-book');
    }

    public function reloadInputs()
    {
        $this->inputBook = $this->instant_book;
    }

    public function reloadInputsInvers()
    {
        $this->instant_book = $this->inputBook;
    }

    public function SubmitBook()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputBook' => $this->inputBook,
        ],[
            'inputBook' => 'required|in:on,off',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPolicies::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'instant_book' => $this->inputBook,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'rules');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
