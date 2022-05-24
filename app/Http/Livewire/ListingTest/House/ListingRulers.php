<?php

namespace App\Http\Livewire\ListingTest\House;

use App\Models\Listing\ListingHouseRulers;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingRulers extends Component
{
    use LivewireAlert;

    public $listingId;
    public $children;
    public $infants;
    public $pets;
    public $smoking;
    public $events;
    public $inputChildrem;
    public $inputInfants;
    public $inputPets;
    public $inputSmoking;
    public $inputEvents;

    public function mount()
    {
        $this->inputChildrem = $this->children;
        $this->inputInfants = $this->infants;
        $this->inputPets = $this->pets;
        $this->inputSmoking = $this->smoking;
        $this->inputEvents = $this->events;
    }

    public function render()
    {
        return view('livewire.listing-test.house.listing-rulers');
    }

    public function submitChildrem()
    {      
        $this->resetValidation();    
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'suitable_for_children' => $this->inputChildrem,
        ]);

        $this->alert('success', 'Update has been successful!');
    }

    public function submitInfants()
    {      
        $this->resetValidation();    
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'suitable_for_infants' => $this->inputInfants,
        ]);

        $this->alert('success', 'Update has been successful!');
    }

    public function submitPets()
    {      
        $this->resetValidation();    
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'pets_allowed' => $this->inputPets,
        ]);

        $this->alert('success', 'Update has been successful!');
    }

    public function submitSmoking()
    {      
        $this->resetValidation();    
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'smoking_allowed' => $this->inputSmoking,
        ]);

        $this->alert('success', 'Update has been successful!');
    }

    public function submitEvents()
    {      
        $this->resetValidation();    
        
        ListingHouseRulers::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'events_allowed' => $this->inputEvents,
        ]);

        $this->alert('success', 'Update has been successful!');
    }
}

