<?php

namespace App\Http\Livewire\ListingTest;

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
    public $inputInit;

    protected $listeners = [
        'cancelAmenities' => 'cancelAmenities',
        'saveAmenities' => 'saveAmenities',
    ];

    public function mount($listing)
    {
        $this->listingId = $listing;

        $this->inputInit = Listings::where([
            'id_listings' => $this->listingId,
            'user_id'     => Auth::id()
        ])->pluck('amenities')->first();

        $this->inputOptions = $this->inputInit;
    }

    public function render()
    {
        return view('livewire.listing-test.amenities');
    }

    public function cancelAmenities()
    {
        $this->inputOptions = $this->inputInit;
    }

    public function reloadInputsInvers()
    {
        $this->inputInit = $this->inputOptions;
    }
    
    public function saveAmenities()
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

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('closeSnoozeApline');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
