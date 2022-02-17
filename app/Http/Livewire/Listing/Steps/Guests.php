<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Guests extends Component
{
    use LivewireAlert;

    public $guests = 0;
    public $beds = 0;
    public $bedrooms = 0;
    public $bathrooms = 0;
    public $disableS1 = false;
    public $disableR1 = true;
    public $disableS2 = false;
    public $disableR2 = true;
    public $disableS3 = false;
    public $disableR3 = true;
    public $disableS4 = false;
    public $disableR4 = true;


    public function render()
    {
        return view('livewire.listing.steps.guests');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        if ( $this->guests === 0 || $this->beds === 0 || $this->bedrooms === 0 || $this->bathrooms === 0)
            return $this->alert('warning', 'Invalid number of guests');

        $content = [
            $this->guests == 1 ? 'Guest' : 'Guests' => $this->guests,
            $this->beds == 1 ? 'Bed' : 'Beds' => $this->beds,
            $this->bedrooms == 1 ? 'Bedroom' : 'Bedrooms' => $this->bedrooms,
            $this->bathrooms == 1 ? 'Bathroom' : 'Bathrooms' => $this->bathrooms
        ];

        $payload = [
            'to' => 'offersplaces',
            'from' => 'guest',
            'content' => $content,
            'img' => 'offersplaces',
        ];
        
        $this->emitUp('next', $payload);
    }
 
    public function buttonSumar($payload)
    {
        if ( $payload == 'guests' ) {
            if ( $this->guests >= 5 )
                return;

            $this->guests = $this->guests + 1;
            $this->disableR1 = false;


            if ( $this->guests >= 5 )
                $this->disableS1 = true;
        }

        if ( $payload == 'beds' ) {
            if ( $this->beds >= 5 )
                return;

            $this->beds = $this->beds + 1;
            $this->disableR2 = false;


            if ( $this->beds >= 5 )
                $this->disableS2 = true;
        }
        
        if ( $payload == 'bedrooms' ) {
            if ( $this->bedrooms >= 5 )
                return;

            $this->bedrooms = $this->bedrooms + 1;
            $this->disableR3 = false;


            if ( $this->bedrooms >= 5 )
                $this->disableS3 = true;
        }
        
        if ( $payload == 'bathrooms' ) {
            if ( $this->bathrooms >= 5 )
                return;

            $this->bathrooms = $this->bathrooms + 1;
            $this->disableR4 = false;


            if ( $this->bathrooms >= 5 )
                $this->disableS4 = true;
        }
    }
 
    public function buttonRestar($payload)
    {
        if ( $payload == 'guests' ) {
            if ( $this->guests <= 0 )
                return;

            $this->guests = $this->guests - 1;
            $this->disableS1 = false;


            if ( $this->guests <= 0 )
                $this->disableR1 = true;
        }
        
        if ( $payload == 'beds' ) {
            if ( $this->beds <= 0 )
                return;

            $this->beds = $this->beds - 1;
            $this->disableS2 = false;


            if ( $this->beds <= 0 )
                $this->disableR2 = true;
        }
        
        if ( $payload == 'bedrooms' ) {
            if ( $this->bedrooms <= 0 )
                return;

            $this->bedrooms = $this->bedrooms - 1;
            $this->disableS3 = false;


            if ( $this->bedrooms <= 0 )
                $this->disableR3 = true;
        }
        
        if ( $payload == 'bathrooms' ) {
            if ( $this->bathrooms <= 0 )
                return;

            $this->bathrooms = $this->bathrooms - 1;
            $this->disableS4 = false;


            if ( $this->bathrooms <= 0 )
                $this->disableR4 = true;
        }
    }
}
