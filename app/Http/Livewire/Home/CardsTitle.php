<?php

namespace App\Http\Livewire\Home;

use App\Models\Listing\Listings;
use App\Models\Wishlists;
use Livewire\Component;
use Auth;

class CardsTitle extends Component
{
    public $contentListing;
    public $wishlists;

    protected $listeners = [
        'reLoadRender' => 'reLoadRender'
    ];

    public function mount()
    {
        $this->wishlists = Wishlists::where('user_id', Auth::id())->distinct('listing_id')->pluck('listing_id')->toArray();
    }

    public function render()
    {
        $this->contentListing = Listings::select(
            'listings.id_listings',
            'listings.title',
            'listings.photos',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
        )
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->get();

        return view('livewire.home.cards-title');
    }

    public function reLoadRender(){ }
}
