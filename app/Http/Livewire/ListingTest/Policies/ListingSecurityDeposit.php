<?php

namespace App\Http\Livewire\ListingTest\Policies;

use App\Models\Listing\ListingPolicies;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingSecurityDeposit extends Component
{
    use LivewireAlert;

    public $listingId;
    public $security;
    public $inputSecurity;

    public function mount()
    {
        $this->inputSecurity = $this->security;
    }

    public function render()
    {
        return view('livewire.listing-test.policies.listing-security-deposit');
    }

    public function reloadInputs()
    {
        $this->inputSecurity = $this->security;
    }

    public function reloadInputsInvers()
    {
        $this->security = $this->inputSecurity;
    }

    public function SubmitSecurity()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputSecurity'     => $this->inputSecurity,
        ],[
            'inputSecurity'     => 'required|integer',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPolicies::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'security_deposit' => $this->inputSecurity,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'rules');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
