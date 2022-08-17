<?php

namespace App\Http\Livewire\Listing\Details\Property;

use App\Models\Listing\ListingPropertyRoomd;
use App\Models\RoomsProperty;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingProperty extends Component
{
    use LivewireAlert;

    public $listingId;
    public $like_place;
    public $property_type;
    public $listing_type;
    public $floors;
    public $floors_on;

    public $inputLike;
    public $inputProperty;
    public $inputListing;
    public $inputFloors;
    public $inputOn;

    public $selectPlace = [];
    public $selectProperty = [];
    public $selectListing = [];


    public function mount()
    {
        $this->inputLike      = $this->like_place;
        $this->inputProperty  = $this->property_type;
        $this->inputListing   = $this->listing_type;
        $this->inputFloors    = $this->floors;
        $this->inputOn        = $this->floors_on;
        $this->selectPlace    = RoomsProperty::distinct('name_type')->pluck('name_type','type'); // Falta agregar type_name despues de la migracion.....
        $this->selectProperty = RoomsProperty::where('type', $this->inputLike)->pluck('name','code');
    }

    public function updatedinputLike($value)
    {
        $this->selectProperty = RoomsProperty::where('type', $value)->pluck('name','code');
        $this->inputProperty = 0;
    }

    public function render()
    {
        return view('livewire.listing.details.property.listing-property');
    }

    public function reloadInputs()
    {
        $this->inputLike     = $this->like_place;
        $this->inputProperty = $this->property_type;
        $this->inputListing  = $this->listing_type;
        $this->inputFloors   = $this->floors;
        $this->inputOn       = $this->floors_on;
    }

    public function reloadInputsInvers()
    {
        $this->like_place    = $this->inputLike;
        $this->property_type = $this->inputProperty;
        $this->listing_type  = $this->inputListing;
        $this->floors        = $this->inputFloors;
        $this->floors_on     = $this->inputOn;
    }

    public function SubmitProperty()
    {
        $this->resetValidation();    

        if ( $this->inputOn > $this->inputFloors )
            return $this->alert('warning', 'The number of floors cannot be less than the floor where the ad is located.');

        $validation = Validator::make([
           'inputLike'     => $this->inputLike,
           'inputProperty' => $this->inputProperty,
           'inputListing'  => $this->inputListing,
           'inputFloors'   => $this->inputFloors,
           'inputOn'       => $this->inputOn,
        ],[
            'inputLike'     => 'required|in:' . implode(',', array_keys( json_decode( $this->selectPlace , true) ) ),
            'inputProperty' => 'required|in:' . implode(',', array_keys( json_decode( $this->selectProperty , true) ) ),
            'inputListing'  => 'required|in:entire_place,private_room,shared_room',
            'inputFloors'   => 'required|numeric',
            'inputOn'       => 'required|numeric',
        ]);

            if ($validation->fails())
                $validation->validate();

        $validation->sometimes('inputOn', 'required|min:1', function($input){
            return $input->inputFloors >= 1;
        });
            if ($validation->fails())
                $validation->validate();

        if ( $this->inputFloors == 0 )
            $this->inputOn = 0;

        ListingPropertyRoomd::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'like_place'    => $this->inputLike,
            'property_type' => $this->inputProperty,
            'listing_type'  => $this->inputListing,
            'floors'        => $this->inputFloors,
            'floors_on'     => $this->inputOn,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'property');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
