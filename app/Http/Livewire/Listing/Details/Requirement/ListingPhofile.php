<?php

namespace App\Http\Livewire\Listing\Details\Requirement;

use App\Models\Listing\ListingHouseRulers;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingPhofile extends Component
{
    use LivewireAlert;

    public $listingId;
    public $profile;
    public $inputProfile;

    public function mount()
    {
        $this->inputProfile = $this->profile;
    }

    public function render()
    {
        return view('livewire.listing.details.requirement.listing-phofile');
    }

    public function submitProfile()
    {      
        $this->resetValidation();    
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'profile_photo_required' => $this->inputProfile,
        ]);

        $this->alert('success', 'Update has been successful!');
    }
}