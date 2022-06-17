<?php

namespace App\Http\Livewire\Home;

use App\Models\Listing\Listings;
use App\Models\Wishlists;
use Livewire\Component;
use Auth;

class CardsAll extends Component
{
    public $contentAllListing;
    public $wishlists;
    
    protected $listeners = [
        'reLoadRender' => 'reLoadRender'
    ];

    public function render()
    {
        $this->preLoad();
        return view('livewire.home.cards-all');
    }

    public function preLoad()
    {
        $this->wishlists = Wishlists::where('user_id', Auth::id())->distinct('listing_id')->pluck('listing_id')->toArray();
        $this->contentAllListing = Listings::select(
            'listings.id_listings',
            'listings.title',
            'listings.photos',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_pricings.base_price',
        )
        ->whereNotIn('listings.status', ['in process'] )
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        ->get();
    }

    public function reLoadRender(){ }
}
