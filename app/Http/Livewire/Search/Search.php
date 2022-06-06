<?php

namespace App\Http\Livewire\Search;

use App\Models\Listing\Listings;
use App\Models\RoomsProperty;
use Livewire\Component;

class Search extends Component
{
    public $contentListing;
    public $category;
    public $filter_categ = null;


    public function mount()
    {
        $this->category = RoomsProperty::pluck('name_type', 'type');
    }
    public function render()
    {
        $this->preLoadContent();
        
        return view('livewire.search.search');
    }

    public function preLoadContent()
    {
        $this->contentListing = Listings::select(
            'listings.id_listings',
            'listings.title',
            'listings.number_guests',
            'listings.photos',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_property_roomds.listing_type',
            'listing_property_roomds.bedrooms',
            'listing_property_roomds.bed',
            'listing_property_roomds.bathrooms',
            'listing_pricings.base_price',
        )
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        ->where(function ($query) {
            if ( $this->filter_categ != null )
                return $query->where('listing_property_roomds.like_place', $this->filter_categ);
        })
        ->get();
    }

    public function changeCateg($payload)
    {
        $this->filter_categ = $payload;
    }
}
