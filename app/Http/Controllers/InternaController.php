<?php

namespace App\Http\Controllers;

use App\Models\AmenitiesSafety;
use App\Models\GuestSafety;
use App\Models\Listing\Listings;
use App\Models\Profile;
use App\Models\ScenicViews;
use Carbon;
use Illuminate\Http\Request;

class InternaController extends Controller
{
    public function viewListingClientDetails(Request $request, $listing)
    {
        if ( Listings::where([ 'id_listings' => $listing ])->whereNotIn('status', ['in process'])->doesntExist() )
            return redirect()->back();

        if ( count( $request->all() ) != 0 && isset( $request['inputDateIn'] ) ){
            $daysDiffs = Carbon::createFromDate( $request['inputDateIn'] )->diff( $request['inputDateOut'] );
        }else{
            $dateInit = Carbon::now()->addDay()->format('d-m-Y');
            $dateSum = Carbon::createFromFormat('d-m-Y', $dateInit )->addDay(2)->format('d-m-Y');
            $daysDiffs = Carbon::createFromDate( $dateInit )->diff( $dateSum );

            $dataNoFilt = [
                'inputDateIn' => $dateInit,
                'inputDateOut' => $dateSum
            ];
        }

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
            'listings.amenities',
            'listings.legal',
            
            'listing_locations.country',
            'listing_locations.city',
            'listing_locations.state',
            'listing_locations.latitude',
            'listing_locations.longitude',
            'listing_locations.scenic_views',
            
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_property_roomds.listing_type',
            'listing_property_roomds.bed',
            'listing_property_roomds.bedrooms',
            'listing_property_roomds.bathrooms',     

            'listing_policies.checkin_window_start',     
            'listing_policies.checkin_window_end',     
            'listing_policies.checkout_time',     
            'listing_policies.cancellation_policy',     
            'listing_policies.security_deposit',     

            'listing_house_rulers.suitable_for_children',     
            'listing_house_rulers.suitable_for_infants',     
            'listing_house_rulers.pets_allowed',   
            'listing_house_rulers.smoking_allowed',   
            'listing_house_rulers.events_allowed',   
            'listing_house_rulers.additional_rules',  

            'listing_pricings.base_price',   
            'listing_pricings.first_guest',   
            'listing_pricings.listing_currency',   
            'listing_pricings.weekly_discount',   
            'listing_pricings.monthly_discount',   
            'listing_pricings.cleaning_fee',
            'listing_pricings.pet_fee',
            'listing_pricings.linens_fee',
            'listing_pricings.resort_fee',
            'listing_pricings.resort_type',
            'listing_pricings.management_fee',
            'listing_pricings.management_type',
            'listing_pricings.community_fee',
            'listing_pricings.community_type',
            'listing_pricings.max_people',
            'listing_pricings.allow',
            'listing_pricings.extra_guest_fee',
            'listing_pricings.extra_guest',
            'listing_pricings.weekend_nightly_fee',

            'listing_booking_details.arrival_instructions',     

        )->where([
            'id_listings' => $listing
        ])
        ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
        ->leftJoin('listing_policies', 'listings.id_listings', 'listing_policies.listing_id')
        ->leftJoin('listing_booking_details', 'listings.id_listings', 'listing_booking_details.listing_id')
        ->leftJoin('listing_house_rulers', 'listings.id_listings', 'listing_house_rulers.listing_id')
        ->first();

        $amenities = AmenitiesSafety::whereIn('code', $content['amenities'])->select('name', 'code', 'typeList','file','type_file');
            $filter = clone $amenities;
                $amenitiesModal = $filter->distinct('typeList','code')->get()->toArray();
                $amenitiesInit = $filter->distinct('code')->get()->toArray();

        $scenicViews = ScenicViews::whereIn('code', $content['scenic_views'])->select('name', 'file','type')->get()->toArray();

        foreach ($amenitiesModal as $key => $value) {
            $amenitiesModalFinal[$value['typeList']][$key]['code'] = $value['code'];
            $amenitiesModalFinal[$value['typeList']][$key]['name'] = $value['name'];
            $amenitiesModalFinal[$value['typeList']][$key]['file'] = $value['file'];
            $amenitiesModalFinal[$value['typeList']][$key]['type_file'] = $value['type_file'];
        }

        $profile = Profile::select('language','about')->where('user_id', $content['user_id'])->first();

        return view('interna.index', [
            'content' => $content,
            'amenitiesModal' => isset( $amenitiesModalFinal ) ? $amenitiesModalFinal : '',
            'amenitiesInit' => $amenitiesInit,
            'scenicViews' => $scenicViews,
            'profile' => $profile,
            'requestDate' => count( $request->all() ) != 0 ? $request->all() : $dataNoFilt,
            'requestDays' => isset( $daysDiffs ) ? $daysDiffs->days : 0,
        ]);
    }
}


