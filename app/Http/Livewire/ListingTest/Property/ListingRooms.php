<?php

namespace App\Http\Livewire\ListingTest\Property;

use App\Models\Listing\ListingPropertyRoomd;
use App\Models\Listing\Listings;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingRooms extends Component
{
    use LivewireAlert;

    public $listingId;
    public $inputBed;
    public $inputBedrooms;
    public $inputBathrooms;
    public $inputLivingrooms;
    public $inputHottub;
    public $inputExterior;
    public $inputHalfbathroom;
    public $inputFullkitchen;
    public $inputKitchenette;
    public $inputDining;
    public $inputOffice;
    public $inputBackyard;
    public $inputPatio;
    public $inputPool;
    public $inputGarage;
    public $inputGym;

    protected $listeners = [
        'saveRoomSpace' => 'saveRoomSpace',
        'cancelRoomSpace' => 'cancelRoomSpace',
        'reloadRoomSpace' => 'cancelRoomSpace',
    ];

    public function mount()
    {   
        $queryProperty = ListingPropertyRoomd::select(
            'bed',
            'bedrooms',
            'bathrooms',
            'additional_areas',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'     => Auth::id()
        ])->first();

        $this->bed = $queryProperty['bed'];
        $this->bedrooms = $queryProperty['bedrooms'];
        $this->bathrooms = $queryProperty['bathrooms'];
        $this->livingrooms = isset( $queryProperty['additional_areas']['livingrooms'] ) ? $queryProperty['additional_areas']['livingrooms'] : 0;
        $this->hottub = isset( $queryProperty['additional_areas']['hottub'] ) ? $queryProperty['additional_areas']['hottub'] : 0;
        $this->exterior = isset( $queryProperty['additional_areas']['exterior'] ) ? $queryProperty['additional_areas']['exterior'] : 0;
        $this->halfbathroom = isset( $queryProperty['additional_areas']['halfbathroom'] ) ? $queryProperty['additional_areas']['halfbathroom'] : 0;
        $this->fullkitchen = isset( $queryProperty['additional_areas']['fullkitchen'] ) ? $queryProperty['additional_areas']['fullkitchen'] : 0;
        $this->kitchenette = isset( $queryProperty['additional_areas']['kictchenette'] ) ? $queryProperty['additional_areas']['kictchenette'] : 0;
        $this->dining = isset( $queryProperty['additional_areas']['dining'] ) ? $queryProperty['additional_areas']['dining'] : 0;
        $this->office = isset( $queryProperty['additional_areas']['office'] ) ? $queryProperty['additional_areas']['office'] : 0;
        $this->backyard = isset( $queryProperty['additional_areas']['backyard'] ) ? $queryProperty['additional_areas']['backyard'] : 0;
        $this->patio = isset( $queryProperty['additional_areas']['patio'] ) ? $queryProperty['additional_areas']['patio'] : 0;
        $this->pool = isset( $queryProperty['additional_areas']['pool'] ) ? $queryProperty['additional_areas']['pool'] : 0;
        $this->garage = isset( $queryProperty['additional_areas']['garage'] ) ? $queryProperty['additional_areas']['garage'] : 0;
        $this->gym = isset( $queryProperty['additional_areas']['gym'] ) ? $queryProperty['additional_areas']['gym'] : 0;

        $this->inputBed = $this->bed;
        $this->inputBedrooms = $this->bedrooms;
        $this->inputBathrooms = $this->bathrooms;
        $this->inputLivingrooms = $this->livingrooms;
        $this->inputHottub = $this->hottub;
        $this->inputExterior = $this->exterior;
        $this->inputHalfbathroom = $this->halfbathroom;
        $this->inputFullkitchen = $this->fullkitchen;
        $this->inputKitchenette = $this->kitchenette;
        $this->inputDining = $this->dining;
        $this->inputOffice = $this->office;
        $this->inputBackyard = $this->backyard;
        $this->inputPatio = $this->patio;
        $this->inputPool = $this->pool;
        $this->inputGarage = $this->garage;
        $this->inputGym = $this->gym;
    }

    public function render()
    {
        return view('livewire.listing-test.property.listing-rooms');
    }

    public function cancelRoomSpace()
    {
        $this->inputBed = $this->bed;
        $this->inputBedrooms = $this->bedrooms;
        $this->inputBathrooms = $this->bathrooms;
        $this->inputLivingrooms = $this->livingrooms;
        $this->inputHottub = $this->hottub;
        $this->inputExterior = $this->exterior;
        $this->inputHalfbathroom = $this->halfbathroom;
        $this->inputFullkitchen = $this->fullkitchen;
        $this->inputKitchenette = $this->kitchenette;
        $this->inputDining = $this->dining;
        $this->inputOffice = $this->office;
        $this->inputBackyard = $this->backyard;
        $this->inputPatio = $this->patio;
        $this->inputPool = $this->pool;
        $this->inputGarage = $this->garage;
        $this->inputGym = $this->gym;
    }

    public function reloadInputsInvers()
    {
        $this->bed = $this->inputBed;
        $this->bedrooms = $this->inputBedrooms;
        $this->bathrooms = $this->inputBathrooms;
        $this->livingrooms = $this->inputLivingrooms;
        $this->hottub = $this->inputHottub;
        $this->exterior = $this->inputExterior;
        $this->halfbathroom = $this->inputHalfbathroom;
        $this->fullkitchen = $this->inputFullkitchen;
        $this->kitchenette = $this->inputKitchenette;
        $this->dining = $this->inputDining;
        $this->office = $this->inputOffice;
        $this->backyard = $this->inputBackyard;
        $this->patio = $this->inputPatio;
        $this->pool = $this->inputPool;
        $this->garage = $this->inputGarage;
        $this->gym = $this->inputGym;
    }

    public function buttonIncrease($paylaod)
    {
        if ( $this->$paylaod >= 5 ) 
            return;

        $this->$paylaod = $this->$paylaod + 1;
    }

    public function buttonDecrease($paylaod)
    {
        if ( $this->$paylaod <= 0 ) 
            return;

        $this->$paylaod = $this->$paylaod - 1;
    }   

    public function buttonDecreaseRequired($paylaod)
    {
        if ( $this->$paylaod <= 1 ) 
            return;

        $this->$paylaod = $this->$paylaod - 1;
    }   

    public function saveRoomSpace()
    {
        $content = [
            'Living room'   => $this->inputLivingrooms,
            'Hot tub'       => $this->inputHottub,
            'Exterior'      => $this->inputExterior,
            'Half bathroom' => $this->inputHalfbathroom,
            'Full kitchen'  => $this->inputFullkitchen,
            'Kitchenette'   => $this->inputKitchenette,
            'Dining area'   => $this->inputDining,
            'Office'        => $this->inputOffice,
            'Backyard'      => $this->inputBackyard,
            'Patio'         => $this->inputPatio,
            'Pool'          => $this->inputPool,
            'Garage'        => $this->inputGarage,
            'Gym'           => $this->inputGym,
        ];

        ListingPropertyRoomd::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'bedrooms'         => $this->inputBedrooms,
            'bed'              => $this->inputBed,
            'bathrooms'        => $this->inputBathrooms,
            'additional_areas' => $content,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'property');
        $this->dispatchBrowserEvent('closeSnoozeApline');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
