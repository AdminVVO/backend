<?php

namespace App\Http\Livewire\Listing\Details\Location;

use App\Models\Listing\ListingLocation;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingGetting extends Component
{
    use LivewireAlert;

    public $listingId;
    public $getting;
    public $inputGetting;

    public function mount()
    {
        $this->inputGetting = $this->getting;
    }

    public function render()
    {
        return view('livewire.listing.details.location.listing-getting');
    }

    public function reloadInputs()
    {
        $this->inputGetting = $this->getting;
    }

    public function reloadInputsInvers()
    {
        $this->getting = $this->inputGetting;
    }

    public function SubmitGetting()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputGetting'  => $this->inputGetting,
        ],[
            'inputGetting'  => 'required|max:250',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingLocation::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'getting_around' => $this->inputGetting,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'location');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
