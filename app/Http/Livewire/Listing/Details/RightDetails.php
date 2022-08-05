<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\AmenitiesSafety;
use App\Models\Currencs;
use App\Models\LanguagesRegions;
use App\Models\Listing\ListingBookingDetails;
use App\Models\Listing\ListingCalendarAvailability;
use App\Models\Listing\ListingHouseRulers;
use App\Models\Listing\ListingLocation;
use App\Models\Listing\ListingPolicies;
use App\Models\Listing\ListingPricing;
use App\Models\Listing\ListingPropertyRoomd;
use App\Models\Listing\Listings;
use App\Models\RoomsProperty;
use App\Models\ScenicViews;
use Auth;
use Livewire\Component;

class RightDetails extends Component
{
    public $listingId;
    public $stepBar = 'details';
    public $content = [];

    protected $listeners = [
        'reloadSubmit' => 'reloadSubmit',
    ];

    public function mount($listing)
    {
        $this->listingId = $listing;
        $this->queryBasicListing();
        $this->queryLocationListing();
        $this->queryPropertyListing();
    }    

    public function reloadSubmit($payload)
    {

        if ( $payload === 'details' ) {
            $this->queryBasicListing();
            $this->queryLocationListing();
            $this->queryPropertyListing();
        }
            if ( $payload === 'basic' )
                $this->queryBasicListing();

            if ( $payload === 'location' )
                $this->queryLocationListing();

            if ( $payload === 'property' )
                $this->queryPropertyListing();


        if ( $payload === 'pricing' ) {
            $this->queryPricingListing();
            $this->queryDiscountListing();
            $this->queryAdditionalListing();
            $this->queryTripListing();
        }
            if ( $payload === 'pricingbase' )
                $this->queryPricingListing();

            if ( $payload === 'discont' )
                $this->queryDiscountListing();

            if ( $payload === 'additional' )
                $this->queryAdditionalListing();

            if ( $payload === 'trip' )
                $this->queryTripListing();


        if ( $payload === 'policies' ) {
            $this->queryPoliciesListing();
            $this->queryHouseListing();
        }
            if ( $payload === 'rules' )
                $this->queryPoliciesListing();

            if ( $payload === 'house' )
                $this->queryHouseListing();

        if ( $payload === 'guests' ) {
            $this->queryPreBookingListing();
            $this->queryPostBookingListing();
        }
            if ( $payload === 'prebooking' )
                $this->queryPreBookingListing();

            if ( $payload === 'postbooking' )
                $this->queryPostBookingListing();
    }

    public function render()
    {
        return view('livewire.listing.details.right-details');
    }

    public function changeBars($payload)
    {
        if ( $payload === 'pricing' )
            $this->stepBar = 'pricing';
        
        if ( $payload === 'policies' )
            $this->stepBar = 'policies';
        
        if ( $payload === 'guests' )
            $this->stepBar = 'guests';
        
        if ( $payload === 'details' )
            $this->stepBar = 'details';
        
        $this->reset(['content']);
        $this->reloadSubmit( $payload );

    }

    public function queryBasicListing()
    {
        $queryListing = Listings::select(
            'photos',
            'title',
            'internal_title',
            'descriptions',
            'space',
            'guest_access',
            'other_details',
            'number_guests',
            'custom_link',
            'language_default',
            'status',
            'resort',
            'template',
            'amenities',
            'snooze'
        )->where([
            'id_listings' => $this->listingId,
            'user_id'     => Auth::id()
        ])->first();

            $this->content['title']            = $queryListing['title'];
            $this->content['internal_title']   = $queryListing['internal_title'];
            $this->content['descriptions']     = $queryListing['descriptions'];
            $this->content['space']            = $queryListing['space'];
            $this->content['guest_access']     = $queryListing['guest_access'];
            $this->content['other_details']    = $queryListing['other_details'];
            $this->content['number_guests']    = $queryListing['number_guests'];
            $this->content['custom_link']      = $queryListing['custom_link'];
            $this->content['language_default'] = $queryListing['language_default'];
            $this->content['status']           = $queryListing['status'];
            $this->content['resort']           = $queryListing['resort'];
            $this->content['template']         = $queryListing['template'];
            $this->content['snooze']           = $queryListing['snooze'];

            // $this->content['safety'] = $queryListing['safety'];
                // $this->content['safety_name'] = AmenitiesSafety::where('type', 'safety')->whereIn('code', $queryListing['safety'] )->pluck('name');

            $this->content['amenities']           = $queryListing['amenities'];
            $this->content['amenities_name'] = AmenitiesSafety::whereIn('code', $queryListing['amenities'] )->pluck('name');
            $this->content['photos'] = $queryListing['photos'];
            $this->content['language'] = LanguagesRegions::pluck('languages', 'code');

    }

    public function queryLocationListing()
    {
        $queryLocation = ListingLocation::select(
            'country',
            'street',
            'city',
            'state',
            'suite',
            'zip_code',
            'neighborhood_description',
            'getting_around',
            'location_sharing',
            'privacy_cancellations',
            'latitude',
            'longitude',
            'scenic_views',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();

        $this->content['country'] = $queryLocation['country'];
        $this->content['street'] = $queryLocation['street'];
        $this->content['city'] = $queryLocation['city'];
        $this->content['state'] = $queryLocation['state'];
        $this->content['zip_code'] = $queryLocation['zip_code'];

            $state    = $queryLocation['state'] != null ? ' ' . $queryLocation['state'] . ' ' : ' ';
            $zip_code = $queryLocation['zip_code'] != null ? ' ' . $queryLocation['zip_code'] . ' ' : ' ';
                $this->content['location'] = "{$queryLocation['country']}{$state}{$queryLocation['city']}{$zip_code}{$queryLocation['street']}";

        $this->content['neighborhood'] = $queryLocation['neighborhood_description'];
        $this->content['getting_around'] = $queryLocation['getting_around'];
        
        $this->content['location_sharing'] = $queryLocation['location_sharing'];
        $this->content['privacy_cancellations'] = $queryLocation['privacy_cancellations'];
        $this->content['latitude'] = $queryLocation['latitude'];
        $this->content['longitude'] = $queryLocation['longitude'];

        $this->content['scenic_views'] = $queryLocation['scenic_views'];
            $this->content['scenic_views_name'] = ScenicViews::whereIn('code', $queryLocation['scenic_views'] )->pluck('name'); 
    }

    public function queryPropertyListing()
    {
        $queryProperty = ListingPropertyRoomd::select(
            'like_place',
            'property_type',
            'listing_type',
            'floors',
            'floors_on',
            'bed',
            'bedrooms',
            'bathrooms',
            'additional_areas',
            'shared_areas'
        )->where([
            'listing_id' => $this->listingId,
            'user_id'     => Auth::id()
        ])->first();

        $this->content['like_place']        = $queryProperty['like_place'];
        $this->content['property_type']     = $queryProperty['property_type'];
        $this->content['listing_type']      = $queryProperty['listing_type'];
        $this->content['floors']            = $queryProperty['floors'];
        $this->content['floors_on']         = $queryProperty['floors_on'];
        $this->content['place_name']        = RoomsProperty::TypeName( $queryProperty['like_place'] );
        $this->content['property_name']     = RoomsProperty::PropertyName( $queryProperty['property_type'] );
        $this->content['listing_type_name'] = RoomsProperty::TypeListing( $queryProperty['listing_type'] );

        $this->content['bed'] = $queryProperty['bed'];
        $this->content['bedrooms'] = $queryProperty['bedrooms'];
        $this->content['bathrooms'] = $queryProperty['bathrooms'];
        $this->content['shared_areas'] = $queryProperty['shared_areas'];
        $this->content['additional_areas'] = $queryProperty['additional_areas'];
        $this->content['additional_show'] = false;
        foreach ( $this->content['additional_areas'] as $key => $value) {
            if ( $value != 0)
                return $this->content['additional_show'] = true;
        }



    }

    public function queryPricingListing()
    {
        $queryPricing = ListingPricing::select(
            'base_price',
            'listing_currency',
            'max_people',
            'allow'
        )->where([
            'listing_id' => $this->listingId,
            'user_id'     => Auth::id()
        ])->first();

        $this->content['base_price']       = $queryPricing['base_price'];
        $this->content['listing_currency'] = $queryPricing['listing_currency'];
        $this->content['max_people']       = $queryPricing['max_people'];
        $this->content['allow']            = $queryPricing['allow'];
        $this->content['currency']         = Currencs::pluck('name', 'code');
    }

    public function queryDiscountListing()
    {
        $queryDiscount = ListingPricing::select(
            'weekly_discount',
            'monthly_discount',
            'other_discount_array',
            'early_bird_discount',
            'early_bird_discount_porcent',
            'last_minute_discount_array',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();

        $this->content['weekly_discount']              = $queryDiscount['weekly_discount'];
        $this->content['monthly_discount']             = $queryDiscount['monthly_discount'];
        $this->content['early_bird_discount']          = $queryDiscount['early_bird_discount'];
        $this->content['early_bird_discount_porcent']  = $queryDiscount['early_bird_discount_porcent'];
        $this->content['last_minute_discount']         = $queryDiscount['last_minute_discount'];
        $this->content['last_minute_discount_porcent'] = $queryDiscount['last_minute_discount_porcent'];
        $this->content['other_discount_array']         = $queryDiscount['other_discount_array'];
        $this->content['last_minute_discount_array']   = $queryDiscount['last_minute_discount_array'];

        unset( $this->content['inputStays'], $this->content['inputStaysDiscount'] );

        /* Codigo para llenar los inputs repetidos - Discount Stays*/
            if ( count( $queryDiscount['other_discount_array'] ) != 0 ) {
                foreach ( $queryDiscount['other_discount_array'] as $key => $value) {
                    $this->content['inputStays'][ $key ] = $value['type'];
                    $this->content['inputStaysDiscount'][ $key ] = $value['discont'];
                }
            } else {
                $this->content['inputStays'][ 0 ] = '';
                $this->content['inputStaysDiscount'][ 0 ] = '';
            }

        unset( $this->content['inputLast'], $this->content['inputLastDiscount'] );

        /* Codigo para llenar los inputs repetidos - Discount LastMinute*/
            if ( count( $queryDiscount['last_minute_discount_array'] ) != 0 ) {
                foreach ( $queryDiscount['last_minute_discount_array'] as $key => $value) {
                    $this->content['inputLast'][ $key ] = $value['type'];
                    $this->content['inputLastDiscount'][ $key ] = $value['discont'];
                }
            } else {
                $this->content['inputLast'][ 0 ] = '';
                $this->content['inputLastDiscount'][ 0 ] = '';
            }
    }

    public function queryAdditionalListing()
    {
        $queryClearing = ListingPricing::select(
            'cleaning_fee',
            'pet_fee',
            'linens_fee',
            'resort_fee',
            'resort_type',
            'management_fee',
            'management_type',
            'community_fee',
            'community_type',
            'extra_guest',
            'extra_guest_fee',
            'weekend_nightly_fee',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();

        $this->content['cleaning_fee']        = $queryClearing['cleaning_fee'];
        $this->content['pet_fee']             = $queryClearing['pet_fee'];
        $this->content['linens_fee']          = $queryClearing['linens_fee'];
        $this->content['resort_fee']          = $queryClearing['resort_fee'];
        $this->content['resort_type']         = $queryClearing['resort_type'];
        $this->content['management_fee']      = $queryClearing['management_fee'];
        $this->content['management_type']     = $queryClearing['management_type'];
        $this->content['community_fee']       = $queryClearing['community_fee'];
        $this->content['community_type']      = $queryClearing['community_type'];
        $this->content['extra_guest']         = $queryClearing['extra_guest'];
        $this->content['extra_guest_fee']     = $queryClearing['extra_guest_fee'];
        $this->content['weekend_nightly_fee'] = $queryClearing['weekend_nightly_fee'];
    }

    public function queryTripListing()
    {
        $queryCalendar = ListingCalendarAvailability::select(
            'minimum_stay',
            'minimum_stay_custom',
            'maximum_stay',
            'advance_notice',
            'preparation_time',
            'availability_window',
            'restricted_checkin_days',
            'restricted_checkout_days',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();

        $this->content['minimum_stay']                 = $queryCalendar['minimum_stay'];
        $this->content['minimum_stay_custom']          = [
            'sundays' => isset($queryCalendar['minimum_stay_custom']['sundays'] ) ? $queryCalendar['minimum_stay_custom']['sundays'] : '' ,
            'mondays' => isset($queryCalendar['minimum_stay_custom']['mondays'] ) ? $queryCalendar['minimum_stay_custom']['mondays'] : '' ,
            'tuesdays' => isset($queryCalendar['minimum_stay_custom']['tuesdays'] ) ? $queryCalendar['minimum_stay_custom']['tuesdays'] : '' ,
            'wednesdays' => isset($queryCalendar['minimum_stay_custom']['wednesdays'] ) ? $queryCalendar['minimum_stay_custom']['wednesdays'] : '' ,
            'thursdays' => isset($queryCalendar['minimum_stay_custom']['thursdays'] ) ? $queryCalendar['minimum_stay_custom']['thursdays'] : '' ,
            'fridays' => isset($queryCalendar['minimum_stay_custom']['fridays'] ) ? $queryCalendar['minimum_stay_custom']['fridays'] : '' ,
            'saturdays' => isset($queryCalendar['minimum_stay_custom']['saturdays'] ) ? $queryCalendar['minimum_stay_custom']['saturdays'] : '' ,
        ];
        $this->content['maximum_stay']                 = $queryCalendar['maximum_stay'];
        $this->content['advance_notice']               = $queryCalendar['advance_notice'];
        $this->content['preparation_time']             = $queryCalendar['preparation_time'];
        $this->content['availability_window']          = $queryCalendar['availability_window'];
        $this->content['restricted_checkin_days']      = $queryCalendar['restricted_checkin_days'];
        $this->content['restricted_checkout_days']     = $queryCalendar['restricted_checkout_days'];
    }

    public function queryPoliciesListing()
    {
        $queryPolicies = ListingPolicies::select(
            'cancellation_policy',
            'instant_book',
            'checkin_window_start',
            'checkin_window_end',
            'checkout_time',
            'security_deposit',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();

        $this->content['cancellation_policy']    = $queryPolicies['cancellation_policy'];
        $this->content['instant_book']           = $queryPolicies['instant_book'];
        $this->content['checkin_window_start']['time'] = count( $queryPolicies['checkin_window_start'] ) != 0 ? $queryPolicies['checkin_window_start']['time'] : null;
        $this->content['checkin_window_start']['type'] = count( $queryPolicies['checkin_window_start'] ) != 0 ? $queryPolicies['checkin_window_start']['type'] : null;
        $this->content['checkin_window_end']['time'] = count( $queryPolicies['checkin_window_end'] ) != 0 ? $queryPolicies['checkin_window_end']['time'] : null;
        $this->content['checkin_window_end']['type'] = count( $queryPolicies['checkin_window_end'] ) != 0 ? $queryPolicies['checkin_window_end']['type'] : null;

            if ( $this->content['checkin_window_start']['type'] === 'AM' && $this->content['checkin_window_end']['type'] === 'AM' || 
                    $this->content['checkin_window_start']['type'] === 'PM' && $this->content['checkin_window_end']['type'] === 'AM' 
                ){
                $this->content['checkin']['next'] = true;
            }

        $this->content['checkout_time']['time'] = count( $queryPolicies['checkout_time'] ) != 0 ? $queryPolicies['checkout_time']['time'] : null;
        $this->content['checkout_time']['type'] = count( $queryPolicies['checkout_time'] ) != 0 ? $queryPolicies['checkout_time']['type'] : null;
        $this->content['security_deposit']       = $queryPolicies['security_deposit'];
    }

    public function queryHouseListing()
    {
        $queryHouse = ListingHouseRulers::select(
            'suitable_for_children',
            'suitable_for_infants',
            'pets_allowed',
            'smoking_allowed',
            'events_allowed',
            'additional_rules',
            'profile_photo_required',
            'local_laws',
            'primary_listing'
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();
        
        $this->content['suitable_for_children']  = $queryHouse['suitable_for_children'];
        $this->content['suitable_for_infants']   = $queryHouse['suitable_for_infants'];
        $this->content['pets_allowed']           = $queryHouse['pets_allowed'];
        $this->content['smoking_allowed']        = $queryHouse['smoking_allowed'];
        $this->content['events_allowed']         = $queryHouse['events_allowed'];
        $this->content['additional_rules']       = $queryHouse['additional_rules'];
        $this->content['profile_photo_required'] = $queryHouse['profile_photo_required'];
        $this->content['local_laws']             = $queryHouse['local_law'];
        $this->content['primary_listing']        = $queryHouse['primary_listing'];
    }

    public function queryPreBookingListing()
    {
        $queryBooking = ListingBookingDetails::select(
            'checkin_window_start',
            'checkin_window_end',
            'checkout_time',
            'guidebooks',
            'interaction_with_guests',
            'interaction_with_guests_comment',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();
        

        $this->content['checkin_window_start']['time'] = count( $queryBooking['checkin_window_start'] ) != 0 ? $queryBooking['checkin_window_start']['time'] : null;
        $this->content['checkin_window_start']['type'] = count( $queryBooking['checkin_window_start'] ) != 0 ? $queryBooking['checkin_window_start']['type'] : null;
        $this->content['checkin_window_end']['time'] = count( $queryBooking['checkin_window_end'] ) != 0 ? $queryBooking['checkin_window_end']['time'] : null;
        $this->content['checkin_window_end']['type'] = count( $queryBooking['checkin_window_end'] ) != 0 ? $queryBooking['checkin_window_end']['type'] : null;

            if ( $this->content['checkin_window_start']['type'] === 'AM' && $this->content['checkin_window_end']['type'] === 'AM' || 
                    $this->content['checkin_window_start']['type'] === 'PM' && $this->content['checkin_window_end']['type'] === 'AM' 
                ){
                $this->content['checkin']['next'] = true;
            }

        $this->content['checkout_time']['time'] = count( $queryBooking['checkout_time'] ) != 0 ? $queryBooking['checkout_time']['time'] : null;
        $this->content['checkout_time']['type'] = count( $queryBooking['checkout_time'] ) != 0 ? $queryBooking['checkout_time']['type'] : null;

        $this->content['interaction_with_guests']         = $queryBooking['interaction_with_guests'];
        $this->content['interaction_with_guests_comment'] = $queryBooking['interaction_with_guests_comment'];
    }    

    public function queryPostBookingListing()
    {
        $queryBooking = ListingBookingDetails::select(
            'country',
            'street',
            'city',
            'state',
            'zip_code',
            'directions',
            'guest_manual',
            'arrival_instructions',
            'wifi_details',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id()
        ])->first();
        
        $this->content['country']                         = $queryBooking['country'];
        $this->content['street']                          = $queryBooking['street'];
        $this->content['city']                            = $queryBooking['city'];
        $this->content['state']                           = $queryBooking['state'];
        $this->content['zip_code']                        = $queryBooking['zip_code'];

        $state    = $queryBooking['state'] != '' ? ' ' . $queryBooking['state'] . ' ' : ' ';
        $zip_code = $queryBooking['zip_code'] != '' ? ' ' . $queryBooking['zip_code'] . ' ' : ' ';

            $this->content['location'] = "{$queryBooking['country']}{$state}{$queryBooking['city']}{$zip_code}{$queryBooking['street']}";

        $this->content['directions']                      = $queryBooking['directions'];
        $this->content['guest_manual']                    = $queryBooking['guest_manual'];
        $this->content['arrival_instructions']            = $queryBooking['arrival_instructions'];
        $this->content['wifi_details']                    = $queryBooking['wifi_details'];
    }
}
