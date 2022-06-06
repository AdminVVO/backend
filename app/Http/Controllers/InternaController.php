<?php

namespace App\Http\Controllers;

use App\Models\Listing\Listings;
use Illuminate\Http\Request;

class InternaController extends Controller
{
    public function viewListingClientDetails($listing)
    {
        if ( Listings::where([ 'id_listings' => $listing ])->doesntExist() )
            return redirect()->back();

        $content = Listings::select(
            'listings.user_id',
            'listings.id_listings',
            'listings.title',
            'listings.photos',
            'listings.number_guests',
            'listings.descriptions',
            'listings.space',
            'listings.guest_access',
            'listings.other_details',
            
            'listing_locations.country',
            'listing_locations.city',
            'listing_locations.state',
            'listing_locations.latitude',
            'listing_locations.longitude',
            
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_property_roomds.listing_type',
            'listing_property_roomds.bed',
            'listing_property_roomds.bedrooms',
            'listing_property_roomds.bathrooms',     

            'listing_policies.checkin_window_start',     
            'listing_policies.checkin_window_end',     

            'listing_house_rulers.pets_allowed',     
            'listing_house_rulers.additional_rules',     
            
            'listing_booking_details.arrival_instructions',     

        )->where([
            'id_listings' => $listing
        ])
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
        ->leftJoin('listing_policies', 'listings.id_listings', 'listing_policies.listing_id')
        ->leftJoin('listing_booking_details', 'listings.id_listings', 'listing_booking_details.listing_id')
        ->leftJoin('listing_house_rulers', 'listings.id_listings', 'listing_house_rulers.listing_id')
        ->first();

        return view('interna.index', ['content' => $content]);
    }
}


