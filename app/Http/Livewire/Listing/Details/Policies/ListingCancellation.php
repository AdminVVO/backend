<?php

namespace App\Http\Livewire\Listing\Details\Policies;

use App\Models\Listing\ListingPolicies;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCancellation extends Component
{
    use LivewireAlert;

    public $listingId;
    public $cancellation;
    public $inputCancellation;

    public function mount()
    {
        $this->inputCancellation = $this->cancellation;
    }

    public function render()
    {
        return view('livewire.listing.details.policies.listing-cancellation');
    }

    public function reloadInputs()
    {
        $this->inputCancellation = $this->cancellation;
    }

    public function reloadInputsInvers()
    {
        $this->cancellation = $this->inputCancellation;
    }

    public function SubmitCancellation()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputCancellation' => $this->inputCancellation,
        ],[
            'inputCancellation' => 'required|in:Strict or Non-refundable,Strict,Firm or Non-refunfable,Firm,Moderate or Non-refundable,Moderate,Flexible or Non-refundable,Flexible',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPolicies::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'cancellation_policy' => $this->inputCancellation,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'rules');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
