<?php

namespace App\Http\Livewire\Category;

use App\Models\Listing\Listings;
use App\Models\RoomsProperty;
use App\Models\Wishlists;
use Livewire\Component;
use App\Models\CardCategory;
use App\Models\Category;
use Auth;

class Cardfilter extends Component
{
    public $contentListing;
    public $wishlists;
    public $category;
    public $filter_categ = null;
    
    protected $listeners = [
        'reLoadRender' => 'reLoadRender'
    ];

    public function mount()
    {
        $this->category = RoomsProperty::pluck('name_type', 'type');
    }

    public function render()
    {
        return view('livewire.category.cardfilter', ['categorys' => $this->category, 'sites'=>$this->preLoadContent()]);
    }

    public function preLoadContent()
    {
        //TODO: AGREGAR DATE.
        $this->wishlists = Wishlists::where('user_id', Auth::id())->distinct('listing_id')->pluck('listing_id')->toArray();
        $this->contentListing = Listings::select(
            'listings.id_listings',
            'listings.title as title',
            'listings.photos',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_pricings.base_price as price',
        )
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        ->where(function ($query) {
            if ( $this->filter_categ != null )
                return $query->where('listing_property_roomds.like_place', $this->filter_categ);
        })->whereNotIn('status', ['in process'])
        ->get();

        return $this->contentListing;
    }

    public function changeCateg($payload)
    {
        $this->filter_categ = $payload;
    }

    public function resetFilter()
    {
        $this->filter_categ = null;
    }

    public function reLoadRender(){ }
}
