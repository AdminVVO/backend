<?php

namespace App\Http\Livewire\Listing;

use App\Models\Listings as ListingsModel;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Listings extends Component
{
    use LivewireAlert;
    
    private $listing = [];
    
    public function mount()
    {
        $this->listing = ListingsModel::select(
            'listings.id_listings',
            'listings.title',
            'listings.internal_title',
            'listings.status',
            'listings.photos',
            'listings.created_at',
            'listing_property_roomds.like_place',
            'listing_property_roomds.bed',
            'listing_property_roomds.bedrooms',
            'listing_property_roomds.bathrooms',
            'listing_locations.city',
            'listing_locations.state',
        )->where([
            'listings.user_id' => Auth::id()
        ])
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
        ->get();

        foreach ($this->listing as $key => $value) {
            if ( count( $value['photos'] ) == 0 ) {
                $this->listing[ $key ]['photos'] = $this->ShowImg( $value['like_place'] );
            }
        }
    }

    public function render()
    {
        return view('livewire.listing.listings', ['listing' => $this->listing]);
    }

    public function ShowImg($payload)
    {
        switch ( $payload ) {
            case 'apartment':
                return 's1.jpg';
                break;

            case 'house':
                return 's2.jpg';
                break;

            case 'secondary':
                return 's3.jpg';
                break;

            case 'unique':
                return 's4.jpg';
                break;

            case 'breakfast':
                return 's5.jpg';
                break;

            case 'boutique':
                return 's6.jpg';
                break;

            default:
                return 'listing.jpg';
                break;
        }
    }
}
