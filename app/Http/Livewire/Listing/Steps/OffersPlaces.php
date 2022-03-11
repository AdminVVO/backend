<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class OffersPlaces extends Component
{
    use LivewireAlert;

    public $amenities = [];
    public $favorites = [];
    public $safety = [];

    public function render()
    {
        return view('livewire.listing.steps.offers-places');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'amenities' => $this->amenities,
           'favorites' => $this->favorites,
           'safety' => $this->safety,
        ],[
            'amenities' => 'required|array|in:pool,hot_tub,patio,bbq_grill,fire_pit,pool_table,indoor_fireplace,outdoor_dining,exercise_equipment',
            'favorites' => 'required|array|in:wifi,TV,kitchen,washer,free_parking,paid_parking,air_conditioning,dedicated_worspace,outdoor_shower',
            'safety' => 'required|array|in:smoke_alarm,first_kit,monoxide_alarm,fire_extinguisher',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select an option!');
        


        $payload = [
            'to' => 'photos',
            'from' => 'offersplaces',
            'content' => [
                'amenities' => array_merge( $this->amenities, $this->favorites ),
                'safety' => $this->safety,
            ],
            'img' => 'photos',
        ];
        
        $this->emitUp('next', $payload);
    }
}
