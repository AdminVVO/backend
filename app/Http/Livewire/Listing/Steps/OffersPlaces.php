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
            'amenities' => 'required|array|in:Pool,Hot tub,Patio,BBQ grill,Fire pit,Pool table,Indoor fireplace,Outdoor dining area,Exercise equipment',
            'favorites' => 'required|array|in:Wifi,TV,Kitchen,Washer,Free parking on premises,Paid parking on premises,Air conditioning,Dedicated worspace,Outdoor shower',
            'safety' => 'required|array|in:Smoke alarm,First aid kit,Caroom monoxide alarm,Fire extinguisher',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select an option!');
        
        $payload = [
            'to' => 'photos',
            'from' => 'offersplaces',
            'content' => array_merge( $this->amenities, $this->favorites, $this->safety ),
            'img' => 'photos',
        ];
        
        $this->emitUp('next', $payload);
    }
}
