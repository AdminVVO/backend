<?php

namespace App\Http\Livewire\Home;

use App\Models\Listing\Listings;
use Livewire\Component;

class CardsAll extends Component
{
    public $contentListing;
    
    public function mount()
    {
        $this->contentListing = Listings::select(
            'listings.id_listings',
            'listings.title',
            'listings.photos',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_pricings.base_price',
        )
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        ->get();
    }

    public function render()
    {
        return view('livewire.home.cards-all');
    }
}
