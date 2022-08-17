<?php

namespace App\Http\Livewire\Listing\Details;

use Livewire\Component;

class WithAreasRooms extends Component
{
    public $listingId;

    public $inputContentRooms = [
        'inputBedrooms' => 0,
        'inputFullbathroom' => 0,
        'inputLivingroom' => 0,
        'inputHottub' => 0,
        'inputExterior' => 0,
        'inputHalfbathroom' => 0,
        'inputFullkitchen' => 0,
        'inputKitchenette' => 0,
        'inputDiningarea' => 0,
        'inputOffice' => 0,
        'inputBackyard' => 0,
        'inputPatio' => 0,
        'inputPool' => 0,
        'inputGarage' => 0,
        'inputGym' => 0,
    ];

    public function render()
    {
        return view('livewire.listing.details.with-areas-rooms');
    }

    public function saveWithAreas()
    {
        $content = [];

        foreach ( $this->inputContentRooms as $key => $value) {
            if ( $value != 0 ) {
                $content[ $key ] = $value;
            }
        }

        $this->emitTo('listing.details.room-space', 'reloadAreas', $content);
    }

    public function buttonDecrease($paylaod)
    {
        if ( $paylaod === 'inputBedrooms' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputFullbathroom' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputLivingroom' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputHottub' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputExterior' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputHalfbathroom' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputFullkitchen' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputKitchenette' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputDiningarea' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputOffice' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputBackyard' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputPatio' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputPool' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputGarage' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputGym' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

    }

    public function buttonIncrease($paylaod)
    {
        if ( $paylaod === 'inputBedrooms' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputFullbathroom' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputLivingroom' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputHottub' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputExterior' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputHalfbathroom' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputFullkitchen' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputKitchenette' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputDiningarea' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputOffice' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputBackyard' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputPatio' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputPool' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputGarage' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputGym' ) 
            $this->inputContentRooms[ $paylaod ] += 1;
    }



}
