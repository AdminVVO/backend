<?php

namespace App\Http\Livewire\Profile;

use App\Models\Listing\Listings;
use App\Models\Wishlists;
use Livewire\Component;
use Livewire\WithPagination;

class ContentProfile extends Component
{
    use WithPagination;

    public $idUser;
    private $contentListing;
    public $countListing;

    public function preLoadContent()
    {
        $this->wishlists = Wishlists::where('user_id', $this->idUser )->distinct('listing_id')->pluck('listing_id')->toArray();
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
            'listing_locations.latitude',
            'listing_locations.longitude',
        )
        ->where('listings.user_id', $this->idUser )
        ->whereNotIn('listings.status', ['in process'] )
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
        ->simplePaginate(2);

        // $this->countListing = count( $this->contentListing );
    }

    public function render()
    {
        $this->preLoadContent();
        return view('livewire.profile.content-profile', [
            'contentListing' => $this->contentListing,
        ]);
    }
}
