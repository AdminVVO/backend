<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listing\Listings;
use Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class GuestSafety extends Component
{
    use LivewireAlert;
    
    public $listingId;
    public $inputSafety = [];

    public function mount()
    {
        $this->inputSafety = Listings::where([
            'id_listings' => $this->listingId,
            'user_id'     => Auth::id()
        ])->pluck('legal')->first();
    }

    public function render()
    {
        return view('livewire.listing.details.guest-safety');
    }

    public function SubmitSafety()
    {
       Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'legal' => $this->inputSafety,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('closeModals');
        $this->alert('success', 'Update has been successful!');
    }
}
