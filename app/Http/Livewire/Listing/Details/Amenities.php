<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listing\Listings;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Amenities extends Component
{
    use LivewireAlert;

    public $listingId;
    public $inputOptions;

    public function mount($listing)
    {
        $this->listingId = $listing;

        $this->inputOptions = Listings::where([
            'id_listings' => $this->listingId,
            'user_id'     => Auth::id()
        ])->pluck('amenities')->first();
    }

    public function render()
    {
        return view('livewire.listing.details.amenities');
    }
    
    public function SubmitAmenities()
    {
        if ( count( $this->inputOptions ) != 0 ) {
            $validation = Validator::make([
               'amenities' => $this->inputOptions,
            ],[
                'amenities' => 'required',
                'amenities.*' => 'exists:amenities_safeties,code',
            ]);

                if ($validation->fails())
                    return $this->alert('warning', 'Validated has failed!');
        }
        
        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'amenities' => $this->inputOptions,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('closeModals');
        $this->alert('success', 'Update has been successful!');
    }
}
