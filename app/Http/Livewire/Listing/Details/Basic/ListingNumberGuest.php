<?php

namespace App\Http\Livewire\Listing\Details\Basic;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingNumberGuest extends Component
{
    use LivewireAlert;

    public $listingId;
    public $numberguest;
    public $disableButton = [
        'Increase' => false,
        'Decrease' => false,
    ];

    public function mount()
    {   
        if ( $this->numberguest >= 16 ) 
            $this->disableButton['Increase'] = true;
            
        if ( $this->numberguest <= 1 ) 
            $this->disableButton['Decrease'] = true;
    }

    public function render()
    {
        return view('livewire.listing.details.basic.listing-number-guest');
    }

    public function buttonIncrease()
    {
        if ( $this->numberguest >= 16 ) 
            return;

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'number_guests'  => $this->numberguest + 1,
        ]);

        $this->numberguest = $this->numberguest + 1;
        $this->disableButton['Decrease'] = false;
        $this->alert('success', 'Update has been successful!');

        if ( $this->numberguest >= 16 ) 
            $this->disableButton['Increase'] = true;
    }

    public function buttonDecrease()
    {
        if ( $this->numberguest <= 1 ) 
            return;

        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'number_guests'  => $this->numberguest - 1,
        ]);

        $this->numberguest = $this->numberguest - 1;
        $this->disableButton['Increase'] = false;
        $this->alert('success', 'Update has been successful!');

        if ( $this->numberguest <= 1 ) 
            $this->disableButton['Decrease'] = true;
    }
}
