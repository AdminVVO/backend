<?php

namespace App\Http\Livewire\Listing\Details;

use Livewire\Component;

class RoomSpace extends Component
{
    public $listingId;
    public $contentTitle = [];

    public $contentAreas = [];
    public $inputFile = [];
    public $inputShared = [];
    public $inputPrivate = [];
    public $inputSleeping = [];


    protected $listeners = [
        'reloadAreas' => 'reloadAreas',
    ];

    public function render()
    {
        return view('livewire.listing.details.room-space');
    }
    
    public function reloadAreas($payload)
    {
        $this->reset(['contentTitle','contentAreas']);

        $content = [];

        foreach ( $payload as $key => $value) {
            array_push( $this->contentTitle, [ 
                'title' => $this->returnName($key),
                'count' => $value == 1 ? 0 : $value
            ]);

            for ( $i = 0; $i < $value  ; $i++) { 
                $this->contentAreas[] = $this->returnName($key) . ( $i == 0 ? '' : ' ' . $i );
                $this->inputFile[] = [];
                $this->inputShared[] = true;
                $this->inputPrivate[] = true;
                $this->inputSleeping[] = [];
            }
        }
    }

    public function returnName($paylaod)
    {
        if ( $paylaod === 'inputBedrooms' ) 
            return 'Bedrooms';

        if ( $paylaod === 'inputFullbathroom' ) 
            return 'Full Bathroom';

        if ( $paylaod === 'inputLivingroom' ) 
            return 'Living Room';

        if ( $paylaod === 'inputHottub' ) 
            return 'Hot Tub';

        if ( $paylaod === 'inputExterior' ) 
            return 'Exterior';

        if ( $paylaod === 'inputHalfbathroom' ) 
            return 'Halfbath Room';

        if ( $paylaod === 'inputFullkitchen' ) 
            return 'Full Kitchen';

        if ( $paylaod === 'inputKitchenette' ) 
            return 'Kitchenette';

        if ( $paylaod === 'inputDiningarea' ) 
            return 'Dining Area';

        if ( $paylaod === 'inputOffice' ) 
            return 'Office';

        if ( $paylaod === 'inputBackyard' ) 
            return 'Backyard';

        if ( $paylaod === 'inputPatio' ) 
            return 'Patio';

        if ( $paylaod === 'inputPool' ) 
            return 'Pool';

        if ( $paylaod === 'inputGarage' ) 
            return 'Garage';

        if ( $paylaod === 'inputGym' ) 
            return 'Gym';
    }

    public function submitWithArea()
    {
        dd($this->inputShared);
        $cont = [];
        for ($i=0; $i < count( $this->contentTitle ); $i++) { 
            $cont[][$i] = $this->inputShared[$i];
        }
    }
}
