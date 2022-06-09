<?php

namespace App\Http\Livewire\Search;

use App\Models\Listing\Listings;
use App\Models\Wishlists;
use Livewire\Component;
use Auth;

class SearchFlexible extends Component
{
    public $contentListing;
    public $wishlists;
    
    public function mount()
    {
        $this->wishlists = Wishlists::where('user_id', Auth::id())->distinct('listing_id')->pluck('listing_id')->toArray();
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
        return view('livewire.search.search-flexible');
    }

    public function changeeee()
    {
        dd('asdasd');
    }
}