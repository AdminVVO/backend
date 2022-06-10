<?php

namespace App\Http\Livewire\Search;

use DateTime;
use App\Models\Listing\Listings;
use App\Models\RoomsProperty;
use App\Models\Wishlists;
use Auth;
use Carbon;
use Livewire\Component;

class Search extends Component
{
    public $request;
    public $contentListing;
    public $wishlists;
    public $places;
    public $category;
    public $countListing;
    public $daysDiff = 0;

    public $inputPrice;
    public $inputPlace;

    public $filter_categ = null;
    public $filterPrice = null;
    public $filterPlace = null;
    
    protected $listeners = [
        'reLoadRender' => 'reLoadRender'
    ];

    public function mount()
    {
        if ( count( $this->request ) != 0 ){
            $daysDiffs = Carbon::createFromDate( $this->request['inputDateIn'] )->diff( $this->request['inputDateOut'] );
                $this->daysDiff = $daysDiffs->days;
        }

        $this->places = RoomsProperty::pluck('name_type', 'type');
    }
    public function render()
    {
        $this->preLoadContent();
        
        return view('livewire.search.search');
    }
 
    public function updatedinputPrice($value)
    {
        $this->filterPrice = $value;
    }
 
    public function updatedinputPlace($value)
    {
        $this->filterPlace = $value;
    }

    public function preLoadContent()
    {
        $this->category = RoomsProperty::where(function ($query) {
                if ( $this->filterPlace != null )
                    return $query->where('type', $this->filterPlace);
            })->pluck('name', 'code');

        $this->wishlists = Wishlists::where('user_id', Auth::id())->distinct('listing_id')->pluck('listing_id')->toArray();
        $this->contentListing = Listings::select(
            'listings.id_listings',
            'listings.title',
            'listings.number_guests',
            'listings.photos',
            'listings.amenities',
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
                return $query->where('listing_property_roomds.property_type', $this->filter_categ);

            if ( $this->filterPlace != null )
                return $query->where('listing_property_roomds.like_place', $this->filterPlace);
        })
        ->where(function ($query) {
            if ( $this->filterPrice != null ){
                if ( $this->filterPrice === '20' )
                    return $query->where('listing_pricings.base_price', '<=', '20');

                if ( $this->filterPrice === '20-20' )
                    return $query->where(
                                'listing_pricings.base_price', '>=', '20',
                                'listing_pricings.base_price', '<=', '80'
                            );

                if ( $this->filterPrice === '80' )
                    return $query->where('listing_pricings.base_price', '>=', '80');
            }
        })
        ->get();

        $this->countListing = count( $this->contentListing );

    }

    public function reLoadRender(){ }

    public function changeCateg($payload)
    {
        $this->filter_categ = $payload;
    }

    public function resetFilter()
    {
        $this->reset(['filter_categ','filterPrice','filterPlace','inputPrice','inputPlace']);
    }
}
