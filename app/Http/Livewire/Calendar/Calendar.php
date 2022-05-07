<?php

namespace App\Http\Livewire\Calendar;

use App\Models\Listing\Listings;
use Livewire\Component;
use Auth;

class Calendar extends Component
{
    public $listings = [];


    public function mount()
    {
        $listings = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'photos'
        )->where([
            'user_id' => Auth::id()
        ])->get()->toArray();

        foreach ( $listings as $key => $value) {
            $listings[ $key ]['photo'] = $value['photos'][0];
            unset( $listings[ $key ]['photos']);
        }

        $this->listings = collect( $listings );
    }

    public function render()
    {
        return view('livewire.calendar.calendar');
    }

    public function selectListing($payload)
    {
        dd( $payload );
    }
}
