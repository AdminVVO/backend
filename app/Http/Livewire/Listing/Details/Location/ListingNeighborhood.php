<?php

namespace App\Http\Livewire\Listing\Details\Location;

use App\Models\Listing\ListingLocation;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingNeighborhood extends Component
{
    use LivewireAlert;

    public $listingId;
    public $neighborhood;
    public $inputNeighborhood;

    public function mount()
    {
        $this->inputNeighborhood = $this->neighborhood;
    }

    public function render()
    {
        return view('livewire.listing.details.location.listing-neighborhood');
    }

    public function reloadInputs()
    {
        $this->inputNeighborhood = $this->neighborhood;
    }

    public function reloadInputsInvers()
    {
        $this->neighborhood = $this->inputNeighborhood;
    }

    public function SubmitNeighborhood()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputNeighborhood'  => $this->inputNeighborhood,
        ],[
            'inputNeighborhood'  => 'max:250',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingLocation::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'neighborhood_description' => $this->inputNeighborhood,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'location');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
