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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class ContentLeft extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $images = [];

    public $listing;
    public $stepBar = '';
    public $content = [];
    public $oldContent = [];
    public $disableButton = [
        'Increase' => false,
        'Decrease' => false,
        'IncreaseGuest' => false,
        'DecreaseGuest' => false,
    ];
    public $classActive = [
        'photos' => false,
        'title' => false,
        'descriptions' => false,
        'link' => false,
        'language' => false,
        'status' => false,
        'amenities' => false,
        'safety' => false,
        'location' => false,
        'neighborhood' => false,
        'getting_around' => false,
        'location_sharing' => false,
        'scenic' => false,
        'property' => false,
        'rooms_spaces' => false,
        'price' => false,
        'currency' => false,
        'weekly' => false,
        'monthly' => false,
        'other_discount' => false,
        'early_bird_discount' => false,
        'last_minute_discount' => false,
        'cleaning' => false,
        'pets' => false,
        'linens' => false,
        'resort' => false,
        'management' => false,
        'community' => false,
        'extra_guest' => false,
        'nightly' => false,
        'min_stay' => false,
        'max_stay' => false,
        'advance_notice' => false,
        'preparation' => false,
        'availability' => false,
        'checkin' => false,
        'checkout' => false,
        'cancelled_policies' => false,
        'instantBook' => false,
        'checkin_window' => false,
        'check_time' => false,
        'secury_depot' => false,
        'addition_rulers' => false,
        'directions' => false,
        'guest_manual' => false,
        'arrival_instr' => false,
        'wifi_details' => false,
        'primary_listing' => false,
    ];


    public $selectPlace = [
        'apartment' => 'Apartament',
        'house' => 'House',
        'secondary' => 'Secondary unit',
        'unique' => 'Unique space',
        'breakfast' => 'Bad and breakfast',
        'boutique' => 'Boutique hotel',
    ];

    private $listinType = [
        'entire_place' => 'Entire place',
        'private_room' => 'Private room',
        'shared_room' => 'Shared room'
    ];

    protected $listeners = [
        'latlong' => 'latlong'
    ];

    public $selectDescribPlace = [];

    /* Variables para Add Inputs Discount Stays*/
    public $inputs = [];
    public $i = 1;
    public $inputStays = [];
    public $inputStaysDiscount = [];
    public $disableAdd = false;

    /* Variables para Add Inputs LastMin Discount*/
    public $inputsLast = [];
    public $iLast = 1;
    public $inputLast = [];
    public $inputLastDiscount = [];
    public $disableAddLast = false;


    public function mount()
    {
        $this->queryOneBars($this->listing);
        $this->stepBar = 'details';

        // $this->queryTreeBars($this->listing);
        // $this->stepBar = 'policies';

        if ( $this->stepBar === 'details') {
            if ( $this->content['number_guests'] >= 5 ) 
                $this->disableButton['Increase'] = true;
            
            if ( $this->content['number_guests'] <= 1 ) 
                $this->disableButton['Decrease'] = true;
        }
    }
    
    public function render()
    {
        return view('livewire.listing.details.content-left');
    }

    public function changeBars($payload)
    {
        $this->reset(['classActive']);
        if ( $payload === 'pricing' ){
            $this->queryTwoBars($this->listing);
            return $this->stepBar = 'pricing';
        }
        
        if ( $payload === 'policies' ){
            $this->queryTreeBars($this->listing);
            return $this->stepBar = 'policies';
        }
        
        if ( $payload === 'guests' ){
            $this->queryFourBars($this->listing);
            return $this->stepBar = 'guests';
        }
        
        if ( $payload === 'details' ){
            $this->queryOneBars($this->listing);
            return $this->stepBar = 'details';
        }

    }

    public function activeClass($payload)
    {
        $this->classActive[ $payload ] = true;
    }

    public function changeEvent($value)
    {
        $this->selectDescribPlace = RoomsProperty::where(['type' => $value])->pluck('name', 'code');
    }

    public function disabledClass($payload)
    {
        $this->content = $this->oldContent;
            if ( $payload === 'property' || $payload === 'rooms_spaces' )
                $this->changeEvent( $this->content['like_place'] );

            if ( $payload === 'other_discount' ){
                $this->reset(['inputStays', 'inputStaysDiscount','inputs','i','disableAdd']);
                $this->inputs = $this->oldContent['inputs'];
                $this->i = $this->oldContent['i'];
                $this->disableAdd = $this->oldContent['disableAdd'];
                $this->inputStays = $this->oldContent['inputStays'];
                $this->inputStaysDiscount = $this->oldContent['inputStaysDiscount'];
            }

            if ( $payload === 'last_minute_discount' ){
                $this->reset(['inputLast', 'inputLastDiscount','inputsLast','iLast','disableAddLast']);
                $this->inputsLast = $this->oldContent['inputsLast'];
                $this->iLast = $this->oldContent['iLast'];
                $this->disableAddLast = $this->oldContent['disableAddLast'];
                $this->inputLast = $this->oldContent['inputLast'];
                $this->inputLastDiscount = $this->oldContent['inputLastDiscount'];
            }

            if ( $payload === 'location_sharing' ){
                $this->dispatchBrowserEvent('refreshMapbox', [
                    'latitude' => $this->content['latitude'],
                    'longitude' => $this->content['longitude'],
                ]);
            }
            

        $this->classActive[ $payload ] = false;
    }

    // /* Query Select One Options Bars */
    // public function queryOneBars($payload)
    // {
    //     $query = Listings::select(
    //         'listings.photos',
    //         'listings.title',
    //         'listings.internal_title',
    //         'listings.descriptions',
    //         'listings.space',
    //         'listings.guest_access',
    //         'listings.other_details',
    //         'listings.number_guests',
    //         'listings.custom_link',
    //         'listings.language_default',
    //         'listings.status',
    //         'listings.resort',
    //         'listings.template',
    //         'listings.amenities',
    //         'listings.safety',
    //         'listing_locations.country',
    //         'listing_locations.street',
    //         'listing_locations.city',
    //         'listing_locations.state',
    //         'listing_locations.suite',
    //         'listing_locations.zip_code',
    //         'listing_locations.neighborhood_description',
    //         'listing_locations.getting_around',
    //         'listing_locations.location_sharing',
    //         'listing_locations.privacy_cancellations',
    //         'listing_locations.latitude',
    //         'listing_locations.longitude',
    //         'listing_locations.scenic_views',
    //         'listing_property_roomds.like_place',
    //         'listing_property_roomds.property_type',
    //         'listing_property_roomds.listing_type',
    //         'listing_property_roomds.floors',
    //         'listing_property_roomds.floors_on',
    //         'listing_property_roomds.bed',
    //         'listing_property_roomds.bedrooms',
    //         'listing_property_roomds.bathrooms',
    //         'listing_property_roomds.additional_areas',
    //         'listing_property_roomds.shared_areas'
    //     )->where([
    //         'listings.id_listings' => $payload,
    //         'listings.user_id'     => Auth::id()
    //     ])
    //     ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
    //     ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
    //     ->first();

    //     if ( !$query )
    //         return redirect()->route('listing');

    //     $this->content['photos'] = $query['photos'];
    //     $this->content['title'] = $query['title'];
    //     $this->content['internal_title'] = $query['internal_title'];
    //     $this->content['descriptions'] = $query['descriptions'];
    //     $this->content['space'] = $query['space'];
    //     $this->content['guest_access'] = $query['guest_access'];
    //     $this->content['other_details'] = $query['other_details'];
    //     $this->content['number_guests'] = $query['number_guests'];
    //     $this->content['custom_link'] = $query['custom_link'];
    //     $this->content['language_default'] = $query['language_default'];
    //     $this->content['status'] = $query['status'];
    //     $this->content['resort'] = $query['resort'];
    //     $this->content['template'] = $query['template'];


    //     $this->content['amenities'] = $query['amenities'];
    //         $this->content['amenities_name'] = AmenitiesSafety::whereIn('code', $query['amenities'] )->pluck('name');

    //     $this->content['safety'] = $query['safety'];
    //         $this->content['safety_name'] = AmenitiesSafety::whereIn('code', $query['safety'] )->pluck('name');

    //     $this->content['country'] = $query['country'];
    //     $this->content['street'] = $query['street'];
    //     $this->content['city'] = $query['city'];
    //     $this->content['state'] = $query['state'];
    //     $this->content['zip_code'] = $query['zip_code'];

    //     $state    = $query['state'] != '' ? ' ' . $query['state'] . ' ' : ' ';
    //     $zip_code = $query['zip_code'] != '' ? ' ' . $query['zip_code'] . ' ' : ' ';

    //         $this->content['location'] = "{$query['country']}{$state}{$query['city']}{$zip_code}{$query['street']}";

    //     $this->content['neighborhood_description'] = $query['neighborhood_description'];
    //     $this->content['getting_around'] = $query['getting_around'];
    //     $this->content['location_sharing'] = $query['location_sharing'];
    //     $this->content['privacy_cancellations'] = $query['privacy_cancellations'];
    //     $this->content['latitude'] = $query['latitude'];
    //     $this->content['longitude'] = $query['longitude'];

    //     $this->content['scenic_views'] = $query['scenic_views'];
    //         $this->content['scenic_views_name'] = ScenicViews::whereIn('code', $query['scenic_views'] )->pluck('name');



    //     $this->content['like_place'] = $query['like_place'];
    //         $this->content['place_name'] = RoomsProperty::TypeName( $query['like_place'] );
    //     $this->content['property_type'] = $query['property_type'];
    //         $this->content['property_name'] = RoomsProperty::PropertyName( $query['property_type'] );
    //     $this->content['listing_type'] = $query['listing_type'];
    //         $this->content['listing_type_name'] = $this->listinType[ $query['listing_type'] ];



    //     $this->content['floors'] = $query['floors'];
    //     $this->content['floors_on'] = $query['floors_on'];
    //     $this->content['bed'] = $query['bed'];
    //     $this->content['bedrooms'] = $query['bedrooms'];
    //     $this->content['bathrooms'] = $query['bathrooms'];
    //     $this->content['additional_areas'] = $query['additional_areas'];
    //     $this->content['shared_areas'] = $query['shared_areas'];
    //     $this->content['language'] = LanguagesRegions::pluck('languages', 'code');
    //     $this->oldContent = $this->content;


    //     $this->changeEvent($this->content['like_place']);
    // }

    /* Query Select Two Options Bars */
    // public function queryTwoBars($payload)
    // {
    //     $query = Listings::select(
    //         'listings.title',
    //         'listing_pricings.base_price',
    //         'listing_pricings.listing_currency',
    //         'listing_pricings.weekly_discount',
    //         'listing_pricings.monthly_discount',
    //         'listing_pricings.other_discount_array',
    //         'listing_pricings.early_bird_discount',
    //         'listing_pricings.early_bird_discount_porcent',
    //         'listing_pricings.last_minute_discount_array',
    //         'listing_pricings.cleaning_fee',
    //         'listing_pricings.pet_fee',
    //         'listing_pricings.linens_fee',
    //         'listing_pricings.resort_fee',
    //         'listing_pricings.resort_type',
    //         'listing_pricings.management_fee',
    //         'listing_pricings.management_type',
    //         'listing_pricings.community_fee',
    //         'listing_pricings.community_type',
    //         'listing_pricings.extra_guest',
    //         'listing_pricings.extra_guest_fee',
    //         'listing_pricings.weekend_nightly_fee',
    //         'listing_calendar_availabilities.minimum_stay',
    //         'listing_calendar_availabilities.minimum_stay_custom',
    //         'listing_calendar_availabilities.maximum_stay',
    //         'listing_calendar_availabilities.advance_notice',
    //         'listing_calendar_availabilities.preparation_time',
    //         'listing_calendar_availabilities.availability_window',
    //         'listing_calendar_availabilities.restricted_checkin_days',
    //         'listing_calendar_availabilities.restricted_checkout_days',
    //     )->where([
    //         'listings.id_listings' => $payload,
    //         'listings.user_id'     => Auth::id()
    //     ])
    //     ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
    //     ->leftJoin('listing_calendar_availabilities', 'listings.id_listings', 'listing_calendar_availabilities.listing_id')
    //     ->first();

    //     if ( !$query )
    //         return redirect()->route('listing');

    //     $this->content['title']                        = $query['title'];
    //     $this->content['base_price']                   = $query['base_price'];
    //     $this->content['listing_currency']             = $query['listing_currency'];
    //     $this->content['weekly_discount']              = $query['weekly_discount'];
    //     $this->content['monthly_discount']             = $query['monthly_discount'];
    //     $this->content['early_bird_discount']          = $query['early_bird_discount'];
    //     $this->content['early_bird_discount_porcent']  = $query['early_bird_discount_porcent'];
    //     $this->content['last_minute_discount']         = $query['last_minute_discount'];
    //     $this->content['last_minute_discount_porcent'] = $query['last_minute_discount_porcent'];
    //     $this->content['cleaning_fee']                 = $query['cleaning_fee'];
    //     $this->content['pet_fee']                      = $query['pet_fee'];
    //     $this->content['linens_fee']                   = $query['linens_fee'];
    //     $this->content['resort_fee']                   = $query['resort_fee'];
    //     $this->content['resort_type']                  = $query['resort_type'];
    //     $this->content['management_fee']               = $query['management_fee'];
    //     $this->content['management_type']              = $query['management_type'];
    //     $this->content['community_fee']                = $query['community_fee'];
    //     $this->content['community_type']               = $query['community_type'];
    //     $this->content['extra_guest']                  = $query['extra_guest'];
    //     $this->content['extra_guest_fee']              = $query['extra_guest_fee'];
    //     $this->content['weekend_nightly_fee']          = $query['weekend_nightly_fee'];
    //     $this->content['minimum_stay']                 = $query['minimum_stay'];
    //     $this->content['minimum_stay_custom']          = [
    //         'sundays' => isset($query['minimum_stay_custom']['sundays'] ) ? $query['minimum_stay_custom']['sundays'] : '' ,
    //         'mondays' => isset($query['minimum_stay_custom']['mondays'] ) ? $query['minimum_stay_custom']['mondays'] : '' ,
    //         'tuesdays' => isset($query['minimum_stay_custom']['tuesdays'] ) ? $query['minimum_stay_custom']['tuesdays'] : '' ,
    //         'wednesdays' => isset($query['minimum_stay_custom']['wednesdays'] ) ? $query['minimum_stay_custom']['wednesdays'] : '' ,
    //         'thursdays' => isset($query['minimum_stay_custom']['thursdays'] ) ? $query['minimum_stay_custom']['thursdays'] : '' ,
    //         'fridays' => isset($query['minimum_stay_custom']['fridays'] ) ? $query['minimum_stay_custom']['fridays'] : '' ,
    //         'saturdays' => isset($query['minimum_stay_custom']['saturdays'] ) ? $query['minimum_stay_custom']['saturdays'] : '' ,
    //     ];
    //     $this->content['maximum_stay']                 = $query['maximum_stay'];
    //     $this->content['advance_notice']               = $query['advance_notice'];
    //     $this->content['preparation_time']             = $query['preparation_time'];
    //     $this->content['availability_window']          = $query['availability_window'];
    //     $this->content['restricted_checkin_days']      = $query['restricted_checkin_days'];
    //     $this->content['restricted_checkout_days']     = $query['restricted_checkout_days'];
    //     $this->content['currency']                     = Currencs::pluck('name', 'code');
    //     $this->oldContent = $this->content;

    //     /* Codigo para llenar los inputs repetidos - Discount Stays*/
    //         $this->reset(['inputStays', 'inputStaysDiscount','inputs','disableAdd','i']);
    //         if ( count( $query['other_discount_array'] ) != 0 ) {
    //             $this->i = 5;
    //             foreach ( $query['other_discount_array'] as $key => $value) {
    //                 array_push($this->inputs , $key );
    //                 $this->inputStays[ $key ] = $value['type'];
    //                 $this->inputStaysDiscount[ $key ] = $value['discont'];
    //             }
    //                 if ( count( $this->inputs ) >= 3 )
    //                     $this->disableAdd = true;
    //         }

    //         if ( count( $this->inputStays ) == 0 ){
    //             array_push($this->inputs ,0);
    //             $this->inputStays[ 0 ] = '';
    //             $this->inputStaysDiscount[ 0 ] = '';
    //         }
        
    //     $this->oldContent['disableAdd'] = $this->disableAdd;
    //     $this->oldContent['inputs'] = $this->inputs;
    //     $this->oldContent['i'] = $this->i;
    //     $this->oldContent['inputStays'] = $this->inputStays;
    //     $this->oldContent['inputStaysDiscount'] = $this->inputStaysDiscount;

    //     /* Codigo para llenar los inputs repetidos - Discount LastMinute*/
    //         $this->reset(['inputLast', 'inputLastDiscount','inputsLast','disableAddLast','iLast']);
    //         if ( count( $query['last_minute_discount_array'] ) != 0 ) {
    //             $this->iLast = 5;
    //             foreach ( $query['last_minute_discount_array'] as $key => $value) {
    //                 array_push($this->inputsLast , $key );
    //                 $this->inputLast[ $key ] = $value['type'];
    //                 $this->inputLastDiscount[ $key ] = $value['discont'];
    //             }
    //                 if ( count( $this->inputsLast ) >= 3 )
    //                     $this->disableAddLast = true;
    //         }

    //         if ( count( $this->inputLast ) == 0 ){
    //             array_push($this->inputsLast ,0);
    //             $this->inputLast[ 0 ] = '';
    //             $this->inputLastDiscount[ 0 ] = '';
    //         }
        
    //     $this->oldContent['disableAddLast'] = $this->disableAddLast;
    //     $this->oldContent['inputsLast'] = $this->inputsLast;
    //     $this->oldContent['iLast'] = $this->iLast;
    //     $this->oldContent['inputLast'] = $this->inputLast;
    //     $this->oldContent['inputLastDiscount'] = $this->inputLastDiscount;
    // }

    // /* Query Select Tree Options Bars */
    // public function queryTreeBars($payload)
    // {
    //     $query = Listings::select(
    //         'listings.title',
    //         'listing_policies.cancellation_policy',
    //         'listing_policies.instant_book',
    //         'listing_policies.checkin_window_start',
    //         'listing_policies.checkin_window_end',
    //         'listing_policies.checkout_time',
    //         'listing_policies.security_deposit',
    //         'listing_house_rulers.suitable_for_children',
    //         'listing_house_rulers.suitable_for_infants',
    //         'listing_house_rulers.pets_allowed',
    //         'listing_house_rulers.smoking_allowed',
    //         'listing_house_rulers.events_allowed',
    //         'listing_house_rulers.additional_rules',
    //         'listing_house_rulers.profile_photo_required',
    //         'listing_house_rulers.local_laws',
    //         'listing_house_rulers.primary_listing'
    //     )->where([
    //         'listings.id_listings' => $payload,
    //         'listings.user_id'     => Auth::id()
    //     ])
    //     ->leftJoin('listing_policies', 'listings.id_listings', 'listing_policies.listing_id')
    //     ->leftJoin('listing_house_rulers', 'listings.id_listings', 'listing_house_rulers.listing_id')
    //     ->first();

    //     $this->content['title']                  = $query['title'];
    //     $this->content['cancellation_policy']    = $query['cancellation_policy'];
    //     $this->content['instant_book']           = $query['instant_book'];

     
    //     $this->content['checkin_window_start']['time'] = count( $query['checkin_window_start'] ) != 0 ? $query['checkin_window_start']['time'] : '';
    //     $this->content['checkin_window_start']['type'] = count( $query['checkin_window_start'] ) != 0 ? $query['checkin_window_start']['type'] : 'AM';
    //     $this->content['checkin_window_end']['time'] = count( $query['checkin_window_end'] ) != 0 ? $query['checkin_window_end']['time'] : '';
    //     $this->content['checkin_window_end']['type'] = count( $query['checkin_window_end'] ) != 0 ? $query['checkin_window_end']['type'] : 'AM';
    //     $this->content['checkout_time']['time'] = count( $query['checkout_time'] ) != 0 ? $query['checkout_time']['time'] : '';
    //     $this->content['checkout_time']['type'] = count( $query['checkout_time'] ) != 0 ? $query['checkout_time']['type'] : 'AM';



    //     $this->content['security_deposit']       = $query['security_deposit'];
    //     $this->content['suitable_for_children']  = $query['suitable_for_children'];
    //     $this->content['suitable_for_infants']   = $query['suitable_for_infants'];
    //     $this->content['pets_allowed']           = $query['pets_allowed'];
    //     $this->content['smoking_allowed']        = $query['smoking_allowed'];
    //     $this->content['events_allowed']         = $query['events_allowed'];
    //     $this->content['additional_rules']       = $query['additional_rules'];
    //     $this->content['profile_photo_required'] = $query['profile_photo_required'];
    //     $this->content['local_laws']             = $query['local_law'];
    //     $this->content['primary_listing']        = $query['primary_listing'];

    //     for ($i = 1; $i <= 12; $i++)
    //         $this->content['time'][] = $i . ':00';

    //     $this->oldContent = $this->content;
    // }

    /* Query Select Four Options Bars */
    public function queryFourBars($payload)
    {
        $query = Listings::select(
            'listings.title',
            'listing_booking_details.checkin_window_start',
            'listing_booking_details.checkin_window_end',
            'listing_booking_details.checkout_time',
            'listing_booking_details.guidebooks',
            'listing_booking_details.interaction_with_guests',
            'listing_booking_details.interaction_with_guests_comment',
            'listing_booking_details.country',
            'listing_booking_details.street',
            'listing_booking_details.city',
            'listing_booking_details.state',
            'listing_booking_details.zip_code',
            'listing_booking_details.directions',
            'listing_booking_details.guest_manual',
            'listing_booking_details.arrival_instructions',
            'listing_booking_details.wifi_details',
        )->where([
            'listings.id_listings' => $payload,
            'listings.user_id'     => Auth::id()
        ])
        ->whereNotIn('status', ['in process'])
        ->leftJoin('listing_booking_details', 'listings.id_listings', 'listing_booking_details.listing_id')
        ->first();

        $this->content['title']                           = $query['title'];
        $this->content['checkin_window_start']            = $query['checkin_window_start'];
        $this->content['checkin_window_end']              = $query['checkin_window_end'];
        $this->content['checkout_time']                   = $query['checkout_time'];
        $this->content['interaction_with_guests']         = $query['interaction_with_guests'];
        $this->content['interaction_with_guests_comment'] = $query['interaction_with_guests_comment'];
        $this->content['country']                         = $query['country'];
        $this->content['street']                          = $query['street'];
        $this->content['city']                            = $query['city'];
        $this->content['state']                           = $query['state'];
        $this->content['zip_code']                        = $query['zip_code'];

        $state    = $query['state'] != '' ? ' ' . $query['state'] . ' ' : ' ';
        $zip_code = $query['zip_code'] != '' ? ' ' . $query['zip_code'] . ' ' : ' ';

            $this->content['location'] = "{$query['country']}{$state}{$query['city']}{$zip_code}{$query['street']}";

        $this->content['directions']                      = $query['directions'];
        $this->content['guest_manual']                    = $query['guest_manual'];
        $this->content['arrival_instructions']            = $query['arrival_instructions'];
        $this->content['wifi_details']                    = $query['wifi_details'];

        for ($i = 1; $i <= 12; $i++)
            $this->content['time'][] = $i . ':00';

        $this->oldContent = $this->content;
    }

    // public function changeArray($array, $value1, $value2)
    // {
    //     $positionOne = array_splice($array, $value1, 1);
    //     $positionTwo = array_splice($array, 0, $value2);
    //     return array_merge( $positionTwo, $positionOne, $array );
    // }
    
    // /* Function Galeri Cover */
    //     public function returnCover( $payload )
    //     {
    //         $this->content['photos'] = $this->changeArray( $this->content['photos'], $payload, 0);
    //     }

    // /* Function Galeri Up */
    //     public function returnUp( $payload )
    //     {
    //         $this->content['photos'] = $this->changeArray( $this->content['photos'], $payload, $payload - 1);
    //     }

    // /* Function Galeri Down */
    //     public function returnDown( $payload )
    //     {
    //         $this->content['photos'] = $this->changeArray( $this->content['photos'], $payload, $payload + 1);
    //     }

    // /* Function Galeri Delete */
    //     public function returnDelete( $payload )
    //     {
    //         unset( $this->content['photos'][$payload]);
    //     }

    // /* Function Galeri Delete */
    //     public function SavePhotos()
    //     {
    //         if ( count( $this->content['photos'] ) == 0 )
    //             return $this->alert('warning', 'Validation has failed.!');

    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'photos' => $this->content['photos'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Function Save New Upload */
    //     public function updateProfile()
    //     {
    //         if ( count( $this->images ) == 0 )
    //             return $this->alert('warning', 'You have not uploaded any image!');

    //         foreach ($this->images as $key => $value) {
    //             $nameOriginal = $value->getClientOriginalName();
    //             $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
    //             $filename = Auth::id() . '-' . Str::random(10) . '.' . $extension;

    //             $this->oldContent['photos'][] = $filename;
    //                 $value->storeAs('uploadListing', $filename, 'public');
    //         }

    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'photos' => $this->oldContent['photos'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->dispatchBrowserEvent('pondReset');
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Title */
    //     public function submitTitle()
    //     {
    //         $validation = Validator::make([
    //            'title'          => $this->content['title'],
    //            'internal_title' => $this->content['internal_title'],
    //         ],[
    //             'title'          => 'required|max:50',
    //             'internal_title' => 'required|max:50',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'title'          => $this->content['title'],
    //             'internal_title' => $this->content['internal_title'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Descriptions */
    //     public function submitDescriptions()
    //     {
    //         $validation = Validator::make([
    //            'descriptions'  => $this->content['descriptions'],
    //            'space'         => $this->content['space'],
    //            'guest_access'  => $this->content['guest_access'],
    //            'other_details' => $this->content['other_details'],
    //         ],[
    //             'descriptions'  => 'required|max:500',
    //             'space'         => 'max:500',
    //             'guest_access'  => 'max:500',
    //             'other_details' => 'max:500',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();

    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'descriptions'  => $this->content['descriptions'],
    //             'space'         => $this->content['space'] != null ? $this->content['space'] : null,
    //             'guest_access'  => $this->content['guest_access'] != null ? $this->content['guest_access'] : null,
    //             'other_details' => $this->content['other_details'] != null ? $this->content['other_details'] : null,
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Button Increment */
    //     public function buttonIncrease()
    //     {
    //         if ( $this->content['number_guests'] >= 5 ) 
    //             return;

    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'number_guests'  => $this->content['number_guests'] + 1,
    //         ]);

    //         $this->disableButton['Decrease'] = false;
    //         $this->alert('success', 'Update has been successful!');
    //         $this->queryOneBars($this->listing);

    //         if ( $this->content['number_guests'] >= 5 ) 
    //             $this->disableButton['Increase'] = true;
    //     }

    // /* Seccion Button Decrease */
    //     public function buttonDecrease()
    //     {
    //         if ( $this->content['number_guests'] <= 1 ) 
    //             return;

    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'number_guests'  => $this->content['number_guests'] - 1,
    //         ]);

    //         $this->disableButton['Increase'] = false;
    //         $this->alert('success', 'Update has been successful!');
    //         $this->queryOneBars($this->listing);

    //         if ( $this->content['number_guests'] <= 1 ) 
    //             $this->disableButton['Decrease'] = true;
    //     }

    // /* Seccion Link */
    //     public function submitLink()
    //     {
    //         $validation = Validator::make([
    //            'custom_link' => $this->content['custom_link'],
    //         ],[
    //             'custom_link' => 'required|max:50',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'custom_link' => $this->content['custom_link'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Language */
    //     public function submitLanguage()
    //     {
    //         $validation = Validator::make([
    //            'language_default' => $this->content['language_default'],
    //         ],[
    //             'language_default' => 'required|exists:languages_regions,code',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'language_default' => $this->content['language_default'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Status */
    //     public function submitStatus()
    //     {
    //         $validation = Validator::make([
    //            'status'   => $this->content['status'],
    //            'resort'   => $this->content['resort'],
    //            'template' => $this->content['template'],
    //         ],[
    //             'status'   => 'required|in:Listed,Snoozed,Unlisted,Deactivate',
    //             'resort'   => 'required|email',
    //             'template' => 'required|in:MS Code,Source',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();

    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'status'   => $this->content['status'],
    //             'resort'   => $this->content['resort'],
    //             'template' => $this->content['template'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //         $this->emit('reloadQuery');
    //     }

    /* Seccion Amenities */
        // public function submitAmenities()
        // {
        //     $validation = Validator::make([
        //        'amenities' => $this->content['amenities'],
        //     ],[
        //         'amenities' => 'required',
        //         'amenities.*' => 'exists:amenities_safeties,code',
        //     ]);

        //         if ($validation->fails())
        //             $validation->validate();
            
        //     Listings::where([
        //         'user_id'     => Auth::id(),
        //         'id_listings' => $this->listing,
        //     ])->update([
        //         'amenities' => $this->content['amenities'],
        //     ]);

        //     $this->alert('success', 'Update has been successful!');
        //     $this->reset(['classActive']);
        //     $this->queryOneBars($this->listing);
        // }

    // /* Seccion Safety */
    //     public function submitSafety()
    //     {
    //         $validation = Validator::make([
    //            'safety' => $this->content['safety'],
    //         ],[
    //             'safety' => 'required',
    //             'safety.*' => 'exists:amenities_safeties,code',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         Listings::where([
    //             'user_id'     => Auth::id(),
    //             'id_listings' => $this->listing,
    //         ])->update([
    //             'safety' => $this->content['safety'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Address */
    //     public function submitAddress()
    //     {
    //         $validation = Validator::make([
    //            'country'  => $this->content['country'],
    //            'street'   => $this->content['street'],
    //            'city'     => $this->content['city'],
    //            'state'    => $this->content['state'],
    //            'zip_code' => $this->content['zip_code'],
    //         ],[
    //             'country'  => 'required',
    //             'street'   => 'required',
    //             'city'     => 'required',
    //             'state'    => 'required',
    //             'zip_code' => 'required|regex:/^[0-9]+$/',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingLocation::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'country'  => $this->content['country'],
    //             'street'   => $this->content['street'],
    //             'city'     => $this->content['city'],
    //             'state'    => $this->content['state'],
    //             'zip_code' => $this->content['zip_code'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Neighborhood */
    //     public function submitNeighborhood()
    //     {
    //         $validation = Validator::make([
    //            'neighborhood'  => $this->content['neighborhood_description'],
    //         ],[
    //             'neighborhood'  => 'required',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingLocation::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'neighborhood_description'  => $this->content['neighborhood_description'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Seccion Getting */
    //     public function submitGetting()
    //     {
    //         $validation = Validator::make([
    //            'getting_around'  => $this->content['getting_around'],
    //         ],[
    //             'getting_around'  => 'required',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingLocation::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'getting_around'  => $this->content['getting_around'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    // /* Function Change Latitud Longitud */
    //     public function latlong( $latitud, $longitud )
    //     {
    //         $this->content['latitude'] = $latitud;
    //         $this->content['longitude'] = $longitud;
    //     }

    // /* Seccion Location Sharing */
    //     public function submitLocationSharing()
    //     {
    //         $validation = Validator::make([
    //            'location_sharing'  => $this->content['location_sharing'],
    //         ],[
    //             'location_sharing'  => 'required|in:General location,Range location',
    //         ]);

    //             if ($validation->fails())
    //                 $this->alert('warning', 'Validation has failed.');
            
    //         ListingLocation::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'location_sharing'  => $this->content['location_sharing'],
    //             'privacy_cancellations'  => $this->content['privacy_cancellations'],
    //             'latitude'  => $this->content['latitude'],
    //             'longitude'  => $this->content['longitude'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //         $this->dispatchBrowserEvent('refreshMapbox', [
    //             'latitude' => $this->content['latitude'],
    //             'longitude' => $this->content['longitude'],
    //         ]);
    //     }

    // /* Seccion Scenic */
    //     public function submitScenic()
    //     {
    //         if ( $this->content['scenic_views'] != [] ) {
    //             $validation = Validator::make([
    //                'scenic_views'  => $this->content['scenic_views'],
    //             ],[
    //                 'scenic_views'  => 'required',
    //                 'scenic_views.*'  => 'exists:scenic_views,code',
    //             ]);

    //                 if ($validation->fails())
    //                     $validation->validate();
    //         }
            
    //         ListingLocation::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'scenic_views'  => $this->content['scenic_views'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryOneBars($this->listing);
    //     }

    /* Seccion Property */
        // public function submitProperty()
        // {
        //     $validation = Validator::make([
        //        'like_place'    => $this->content['like_place'],
        //        'property_type' => $this->content['property_type'],
        //        'listing_type'  => $this->content['listing_type'],
        //        'floors'        => $this->content['floors'],
        //        'floors_on'     => $this->content['floors_on'],
        //     ],[
        //         'like_place'    => 'required|in:' . implode(',', array_keys( $this->selectPlace ) ),
        //         'property_type' => 'required|in:' . implode(',', array_keys( json_decode( $this->selectDescribPlace, true) ) ),
        //         'listing_type'  => 'required|in:' . implode(',', array_keys( $this->listinType ) ),
        //         'floors'        => 'required|numeric',
        //         'floors_on'     => 'required|numeric',
        //     ]);

        //         if ($validation->fails())
        //             $validation->validate();
            
        //     ListingPropertyRoomd::where([
        //         'user_id'    => Auth::id(),
        //         'listing_id' => $this->listing,
        //     ])->update([
        //         'like_place'    => $this->content['like_place'],
        //         'property_type' => $this->content['property_type'],
        //         'listing_type'  => $this->content['listing_type'],
        //         'floors'        => $this->content['floors'],
        //         'floors_on'     => $this->content['floors_on'],
        //     ]);

        //     $this->alert('success', 'Update has been successful!');
        //     $this->reset(['classActive']);
        //     $this->queryOneBars($this->listing);
        // }

    /* Seccion Rooms Space */
        public function submitRoomsSpace()
        {
            $validation = Validator::make([
               'bedrooms'         => $this->content['bedrooms'],
               'bed'              => $this->content['bed'],
               'bathrooms'        => $this->content['bathrooms'],
               'additional_areas' => $this->content['additional_areas'],
               'shared_areas'     => $this->content['shared_areas'],
            ],[
                'bedrooms'         => 'required|integer',
                'bed'              => 'required|integer',
                'bathrooms'        => 'required|integer',
                'additional_areas' => 'required|integer',
                'shared_areas'     => 'required',
            ]);

                if ($validation->fails())
                    $validation->validate();
            
            ListingPropertyRoomd::where([
                'user_id'    => Auth::id(),
                'listing_id' => $this->listing,
            ])->update([
                'bedrooms'         => $this->content['bedrooms'],
                'bed'              => $this->content['bed'],
                'bathrooms'        => $this->content['bathrooms'],
                'additional_areas' => $this->content['additional_areas'],
                'shared_areas'     => $this->content['shared_areas'],
            ]);

            $this->alert('success', 'Update has been successful!');
            $this->reset(['classActive']);
            $this->queryOneBars($this->listing);
        }

    /* Seccion Price */
        // public function submitPrice()
        // {
        //     $validation = Validator::make([
        //        'base_price'    => $this->content['base_price'],
        //     ],[
        //         'base_price' => 'integer',
        //     ]);

        //         if ($validation->fails())
        //             $validation->validate();
            
        //     ListingPricing::where([
        //         'user_id'    => Auth::id(),
        //         'listing_id' => $this->listing,
        //     ])->update([
        //         'base_price' => $this->content['base_price'],
        //     ]);

        //     $this->alert('success', 'Update has been successful!');
        //     $this->reset(['classActive']);
        //     $this->queryTwoBars($this->listing);
        // }

    // /* Seccion Currency */
    //     public function submitCurrency()
    //     {
    //         $validation = Validator::make([
    //            'listing_currency'    => $this->content['listing_currency'],
    //         ],[
    //             'listing_currency' => 'required|exists:currencs,code',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'listing_currency' => $this->content['listing_currency'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Weekly */
    //     public function submitWeekly()
    //     {
    //         $validation = Validator::make([
    //            'weekly_discount'    => $this->content['weekly_discount'],
    //         ],[
    //             'weekly_discount' => 'required|integer|min:0|max:100|digits_between:0,3',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'weekly_discount' => $this->content['weekly_discount'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    /* Seccion Monthly */
    //     public function submitMonthly()
    //     {
    //         $validation = Validator::make([
    //            'monthly_discount'    => $this->content['monthly_discount'],
    //         ],[
    //             'monthly_discount' => 'required|integer|min:0|max:100|digits_between:0,3',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'monthly_discount' => $this->content['monthly_discount'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Other Stay */
    //     public function addInputs($i)
    //     {
    //         if ( $this->disableAdd )
    //             return;

    //         $i = $i + 1;
    //         $this->i = $i;
    //         array_push($this->inputs ,$i);
    //         $this->inputStays[ $i ] = '';
    //         $this->inputStaysDiscount[ $i ] = '';
    //         if ( count( $this->inputs ) >= 3 )
    //             $this->disableAdd = true;

    //     }

    //     public function removeInputs($i)
    //     {
    //         $index = '';
    //         foreach ( $this->inputs as $key => $value)
    //             if ( $value === $i )
    //                 $index = $key;

    //         unset($this->inputs[ $index ]);
    //         unset($this->inputStays[ $i ]);
    //         unset($this->inputStaysDiscount[ $i ]);

    //         if ( count( $this->inputs ) <= 2 )
    //             $this->disableAdd = false;
    //     }

    //     public function submitOtherStay()
    //     {
    //         $validation = Validator::make([
    //            'inputStays'           => $this->inputStays,
    //            'inputStaysDiscount'   => $this->inputStaysDiscount,
    //         ],[
    //             'inputStays.*'           => 'required|in:Weekly (1 week),Monthly (4 weeks),8 weeks,12 weeks',
    //             'inputStaysDiscount.*'   => 'required|integer|min:10|max:100|digits_between:0,2',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();

    //         $content = [];
    //         $itera = 0;
    //         foreach ($this->inputStays as $key => $value) {
    //             $content[ $itera ]['type'] = $value;
    //             $content[ $itera ]['discont'] = $this->inputStaysDiscount[ $key ];
    //             $itera++;
    //         }

    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'other_discount_array' => $content,
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Early Bird */
    //     public function submitEarlyBird()
    //     {
    //         $validation = Validator::make([
    //            'early_bird_discount'         => $this->content['early_bird_discount'],
    //            'early_bird_discount_porcent' => $this->content['early_bird_discount_porcent'],
    //         ],[
    //             'early_bird_discount'         => 'required|in:0,1,2,3,4,5',
    //             'early_bird_discount_porcent' => 'required|integer|min:0|max:100|digits_between:0,3',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'early_bird_discount'         => $this->content['early_bird_discount'] != 0 ? $this->content['early_bird_discount'] : '',
    //             'early_bird_discount_porcent' => $this->content['early_bird_discount'] != 0 ? $this->content['early_bird_discount_porcent'] : 0,
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Last Minute */
    //     public function addInputsLast($i)
    //     {
    //         if ( $this->disableAddLast )
    //             return;

    //         $i = $i + 1;
    //         $this->iLast = $i;
    //         array_push($this->inputsLast ,$i);
    //         $this->inputLast[ $i ] = '';
    //         $this->inputLastDiscount[ $i ] = '';
    //         if ( count( $this->inputsLast ) >= 3 )
    //             $this->disableAddLast = true;
    //     }

    //     public function removeInputsLast($i)
    //     {
    //         $index = '';
    //         foreach ( $this->inputsLast as $key => $value)
    //             if ( $value === $i )
    //                 $index = $key;

    //         unset($this->inputsLast[ $index ]);
    //         unset($this->inputLast[ $i ]);
    //         unset($this->inputLastDiscount[ $i ]);

    //         if ( count( $this->inputsLast ) <= 2 )
    //             $this->disableAddLast = false;
    //     }

    //     public function submitLastMinute()
    //     {
    //         $validation = Validator::make([
    //            'inputLast'           => $this->inputLast,
    //            'inputLastDiscount'   => $this->inputLastDiscount,
    //         ],[
    //             'inputLast.*'           => 'required|in:0,1,2,3,4,5',
    //             'inputLastDiscount.*'   => 'required|integer|min:0|max:100|digits_between:0,3',
    //         ]);

    //             if ($validation->fails())
    //                 return $this->alert('warning', 'Validation has failed.!');
    //                 // $validation->validate();

    //         $content = [];
    //         $itera = 0;
    //         foreach ($this->inputLast as $key => $value) {
    //             $content[ $itera ]['type'] = $value;
    //             $content[ $itera ]['discont'] = $this->inputLastDiscount[ $key ];
    //             $itera++;
    //         }

    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'last_minute_discount_array' => $content,
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    /* Seccion Pets */
    //     public function submitCleaning()
    //     {
    //         $validation = Validator::make([
    //            'cleaning_fee'         => $this->content['cleaning_fee'],
    //         ],[
    //             'cleaning_fee' => 'required|integer|min:0|max:500',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'cleaning_fee' => $this->content['cleaning_fee'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Pets */
    //     public function submitPets()
    //     {
    //         $validation = Validator::make([
    //            'pet_fee'         => $this->content['pet_fee'],
    //         ],[
    //             'pet_fee' => 'required|integer|min:0|max:500',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'pet_fee' => $this->content['pet_fee'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Linens */
    //     public function submitLinens()
    //     {
    //         $validation = Validator::make([
    //            'linens_fee'         => $this->content['linens_fee'],
    //         ],[
    //             'linens_fee' => 'required|integer|min:0|max:500',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'linens_fee' => $this->content['linens_fee'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Resort */
    //     public function submitResort()
    //     {
    //         $rule = '';

    //             if ( $this->content['resort_type'] === 'porcent')
    //                 $rule = 'required|integer|min:0|max:100|digits_between:0,3';

    //             if ( $this->content['resort_type'] === 'currency')
    //                 $rule = 'required|integer|min:0|max:500';

    //         $validation = Validator::make([
    //            'resort_fee'         => $this->content['resort_fee'],
    //            'resort_type'         => $this->content['resort_type'],
    //         ],[
    //             'resort_fee' => $rule,
    //             'resort_type' => 'required|in:porcent,currency',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'resort_fee' => $this->content['resort_fee'],
    //             'resort_type' => $this->content['resort_type'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Management */
    //     public function submitManagement()
    //     {
    //         $rule = '';

    //             if ( $this->content['management_type'] === 'porcent')
    //                 $rule = 'required|integer|min:0|max:100|digits_between:0,3';

    //             if ( $this->content['management_type'] === 'currency')
    //                 $rule = 'required|integer|min:0|max:500';

    //         $validation = Validator::make([
    //            'management_fee'         => $this->content['management_fee'],
    //            'management_type'         => $this->content['management_type'],
    //         ],[
    //             'management_fee' => $rule,
    //             'management_type' => 'required|in:porcent,currency',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'management_fee' => $this->content['management_fee'],
    //             'management_type' => $this->content['management_type'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Community */
    //     public function submitCommunity()
    //     {
    //         $rule = '';

    //             if ( $this->content['community_type'] === 'porcent')
    //                 $rule = 'required|integer|min:0|max:100|digits_between:0,3';

    //             if ( $this->content['community_type'] === 'currency')
    //                 $rule = 'required|integer|min:0|max:500';

    //         $validation = Validator::make([
    //            'community_fee'         => $this->content['community_fee'],
    //            'community_type'         => $this->content['community_type'],
    //         ],[
    //             'community_fee' => $rule,
    //             'community_type' => 'required|in:porcent,currency',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'community_fee' => $this->content['community_fee'],
    //             'community_type' => $this->content['community_type'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion ExtrGuest */
    //     public function submitExtrGuest()
    //     {
    //         $validation = Validator::make([
    //            'extra_guest_fee' => $this->content['extra_guest_fee'],
    //            'extra_guest'     => $this->content['extra_guest'],
    //         ],[
    //             'extra_guest_fee' => 'required|integer|min:0|max:500',
    //             'extra_guest'     => 'required|integer|min:0|max:5',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'extra_guest_fee' => $this->content['extra_guest_fee'],
    //             'extra_guest' => $this->content['extra_guest'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    //     public function increaseGuest()
    //     {
    //         if ( $this->content['extra_guest'] >= 5 ) 
    //             return;

    //         $this->content['extra_guest'] = $this->content['extra_guest'] + 1;

    //         $this->disableButton['DecreaseGuest'] = false;

    //         if ( $this->content['extra_guest'] >= 5 ) 
    //             $this->disableButton['IncreaseGuest'] = true;
    //     }

    //     public function decreaseGuest()
    //     {
    //         if ( $this->content['extra_guest'] <= 0 ) 
    //             return;

    //         $this->content['extra_guest'] = $this->content['extra_guest'] - 1;

    //         $this->disableButton['IncreaseGuest'] = false;

    //         if ( $this->content['extra_guest'] <= 0 ) 
    //             $this->disableButton['DecreaseGuest'] = true;
    //     }

    // /* Seccion Nighly */
    //     public function submitNighly()
    //     {
    //         $validation = Validator::make([
    //            'weekend_nightly_fee' => $this->content['weekend_nightly_fee'],
    //         ],[
    //             'weekend_nightly_fee' => 'required|integer|min:0|max:500',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPricing::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'weekend_nightly_fee' => $this->content['weekend_nightly_fee'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Min Trips */
    //     public function submitMinTrip()
    //     {
    //         $validation = Validator::make([
    //            'minimum_stay' => $this->content['minimum_stay'],
    //            'minimum_stay_custom' => $this->content['minimum_stay_custom'],
    //         ],[
    //             'minimum_stay' => 'required|integer|min:0|max:30',
    //             'minimum_stay_custom.*' => 'integer',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'minimum_stay' => $this->content['minimum_stay'],
    //             'minimum_stay_custom' => $this->content['minimum_stay_custom'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Max Trips */
    //     public function submitMaxTrip()
    //     {
    //         $validation = Validator::make([
    //            'maximum_stay' => $this->content['maximum_stay'],
    //         ],[
    //             'maximum_stay' => 'required|integer|min:0|max:30',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'maximum_stay' => $this->content['maximum_stay'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Advance Notice */
    //     public function submitAdvanceNotic()
    //     {
    //         $validation = Validator::make([
    //            'advance_notice' => $this->content['advance_notice'],
    //         ],[
    //             'advance_notice' => 'required|in:0,1,2,3,4,5,6,7',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'advance_notice' => $this->content['advance_notice'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Preparation */
    //     public function submitPreparation()
    //     {
    //         $validation = Validator::make([
    //            'preparation_time' => $this->content['preparation_time'],
    //         ],[
    //             'preparation_time' => 'required|in:0,1,2,3,4,5',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'preparation_time' => $this->content['preparation_time'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }
        
    // /* Seccion Availability */
    //     public function submitAvailability()
    //     {
    //         $validation = Validator::make([
    //            'availability_window' => $this->content['availability_window'],
    //         ],[
    //             'availability_window' => 'required|in:0,1,2,3,4,5',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'availability_window' => $this->content['availability_window'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }
        
    // /* Seccion Checkin */
    //     public function submitCheckin()
    //     {
    //         $validation = Validator::make([
    //            'restricted_checkin_days' => $this->content['restricted_checkin_days'],
    //         ],[
    //             'restricted_checkin_days' => 'required|array',
    //             'restricted_checkin_days.*' => 'in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'restricted_checkin_days' => $this->content['restricted_checkin_days'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }
        
    // /* Seccion Checkout */
    //     public function submitCheckout()
    //     {
    //         $validation = Validator::make([
    //            'restricted_checkout_days' => $this->content['restricted_checkout_days'],
    //         ],[
    //             'restricted_checkout_days' => 'required|array',
    //             'restricted_checkout_days.*' => 'in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingCalendarAvailability::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'restricted_checkout_days' => $this->content['restricted_checkout_days'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTwoBars($this->listing);
    //     }

    // /* Seccion Cancelled Policies */
    //     public function submitCancelledPolicies()
    //     {
    //         $validation = Validator::make([
    //            'cancellation_policy' => $this->content['cancellation_policy'],
    //         ],[
    //             'cancellation_policy' => 'required|in:Strict or Non-refundable,Strict,Firm or Non-refunfable,Firm,Moderate or Non-refundable,Moderate,Flexible or Non-refundable,Flexible',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPolicies::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'cancellation_policy' => $this->content['cancellation_policy'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Instant Book */
    //     public function submitInstanBook()
    //     {
    //         $validation = Validator::make([
    //            'instant_book' => $this->content['instant_book'],
    //         ],[
    //             'instant_book' => 'required|in:on,off',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingPolicies::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'instant_book' => $this->content['instant_book'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion CheckeIn */
    //     public function submitCheckinWindow()
    //     {
    //         $validation = Validator::make([
    //            'checkin_window_start'      => $this->content['checkin_window_start']['time'],
    //            'checkin_window_start_type' => $this->content['checkin_window_start']['type'],
    //            'checkin_window_end'        => $this->content['checkin_window_end']['time'],
    //            'checkin_window_end_type'   => $this->content['checkin_window_end']['type'],
    //         ],[
    //             'checkin_window_start'      => 'required|in:' . implode(',', $this->content['time']),
    //             'checkin_window_start_type' => 'required|in:AM,PM',
    //             'checkin_window_end'        => 'required|in:' . implode(',', $this->content['time']),
    //             'checkin_window_end_type'   => 'required|in:AM,PM',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingPolicies::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'checkin_window_start' => [
    //                 'time' => $this->content['checkin_window_start']['time'],
    //                 'type' => $this->content['checkin_window_start']['type'],
    //             ],
    //             'checkin_window_end' => [
    //                 'time' => $this->content['checkin_window_end']['time'],
    //                 'type' => $this->content['checkin_window_end']['type'],
    //             ],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Checktime */
    //     public function submitCheckTime()
    //     {
    //         $validation = Validator::make([
    //            'checkout_time'      => $this->content['checkout_time']['time'],
    //            'checkout_time_type' => $this->content['checkout_time']['type'],
    //         ],[
    //             'checkout_time'      => 'required|in:' . implode(',', $this->content['time']),
    //             'checkout_time_type' => 'required|in:AM,PM',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingPolicies::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'checkout_time' => [
    //                 'time' => $this->content['checkout_time']['time'],
    //                 'type' => $this->content['checkout_time']['type'],
    //             ]
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Secury Deposit */
    //     public function submitSecureDeposit()
    //     {
    //         $validation = Validator::make([
    //            'security_deposit' => $this->content['security_deposit'],
    //         ],[
    //             'security_deposit' => 'required|integer',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingPolicies::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'security_deposit' => $this->content['security_deposit'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Children */
    //     public function submitChildren()
    //     {
    //         $validation = Validator::make([
    //            'suitable_for_children' => $this->content['suitable_for_children'],
    //         ],[
    //             'suitable_for_children' => 'required|boolean',
    //         ]);
    //             if ($validation->fails())
    //                 return $this->alert('warning', 'Validation has failed.!');

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'suitable_for_children' => $this->content['suitable_for_children'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Infants */
    //     public function submitInfants()
    //     {
    //         $validation = Validator::make([
    //            'suitable_for_infants' => $this->content['suitable_for_infants'],
    //         ],[
    //             'suitable_for_infants' => 'required|boolean',
    //         ]);
    //             if ($validation->fails())
    //                 return $this->alert('warning', 'Validation has failed.!');

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'suitable_for_infants' => $this->content['suitable_for_infants'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Pets Rulers */
    //     public function submitPetsRuls()
    //     {
    //         $validation = Validator::make([
    //            'pets_allowed' => $this->content['pets_allowed'],
    //         ],[
    //             'pets_allowed' => 'required|boolean',
    //         ]);
    //             if ($validation->fails())
    //                 return $this->alert('warning', 'Validation has failed.!');

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'pets_allowed' => $this->content['pets_allowed'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Smoking */
    //     public function submitSmoking()
    //     {
    //         $validation = Validator::make([
    //            'smoking_allowed' => $this->content['smoking_allowed'],
    //         ],[
    //             'smoking_allowed' => 'required|boolean',
    //         ]);
    //             if ($validation->fails())
    //                 return $this->alert('warning', 'Validation has failed.!');

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'smoking_allowed' => $this->content['smoking_allowed'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Events */
    //     public function submitEvent()
    //     {
    //         $validation = Validator::make([
    //            'events_allowed' => $this->content['events_allowed'],
    //         ],[
    //             'events_allowed' => 'required|boolean',
    //         ]);
    //             if ($validation->fails())
    //                 return $this->alert('warning', 'Validation has failed.!');

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'events_allowed' => $this->content['events_allowed'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Additional */
    //     public function submitAdditional()
    //     {
    //         $validation = Validator::make([
    //            'additional_rules' => $this->content['additional_rules'],
    //         ],[
    //             'additional_rules' => 'required|max:250',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'additional_rules' => $this->content['additional_rules'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Profile Photo */
    //     public function submitProfilePhoto()
    //     {
    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'profile_photo_required' => $this->content['profile_photo_required'] ? true : false,
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion Personal Use */
    //     public function submitPrimaryUse()
    //     {
    //         $validation = Validator::make([
    //            'primary_listing' => $this->content['primary_listing'],
    //         ],[
    //             'primary_listing' => 'required|in:guests,personal',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingHouseRulers::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'primary_listing' => $this->content['primary_listing'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryTreeBars($this->listing);
    //     }

    // /* Seccion CheckIn Booking */
    //     public function submitCheckinWindowBooking()
    //     {
    //         $validation = Validator::make([
    //            'checkin_window_start' => $this->content['checkin_window_start'],
    //            'checkin_window_end' => $this->content['checkin_window_end'],
    //         ],[
    //             'checkin_window_start' => 'required|in:' . implode(',', $this->content['time']),
    //             'checkin_window_end' => 'required|in:' . implode(',', $this->content['time']),
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'checkin_window_start' => $this->content['checkin_window_start'],
    //             'checkin_window_end' => $this->content['checkin_window_end'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion CheckTime Booking */
    //     public function submitCheckTimeBooking()
    //     {
    //         $validation = Validator::make([
    //            'checkout_time' => $this->content['checkout_time'],
    //         ],[
    //             'checkout_time' => 'required|in:' . implode(',', $this->content['time']),
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'checkout_time' => $this->content['checkout_time'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion Iterations */
    //     public function submitIteration()
    //     {
    //         $validation = Validator::make([
    //            'interaction_with_guests' => $this->content['interaction_with_guests'],
    //            'interaction_with_guests_comment' => $this->content['interaction_with_guests_comment'],
    //         ],[
    //             'interaction_with_guests' => 'required|in:I plan,I give,I wont',
    //             'interaction_with_guests_comment' => 'required|max:250',
    //         ]);
    //             if ($validation->fails())
    //                 $validation->validate();

    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'interaction_with_guests' => $this->content['interaction_with_guests'],
    //             'interaction_with_guests_comment' => $this->content['interaction_with_guests_comment'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion Address Booking */
    //     public function submitAddressBooking()
    //     {
    //         $validation = Validator::make([
    //            'country'  => $this->content['country'],
    //            'street'   => $this->content['street'],
    //            'city'     => $this->content['city'],
    //            'state'    => $this->content['state'],
    //            'zip_code' => $this->content['zip_code'],
    //         ],[
    //             'country'  => 'required',
    //             'street'   => 'required',
    //             'city'     => 'required',
    //             'state'    => 'required',
    //             'zip_code' => 'required|regex:/^[0-9]+$/',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'country'  => $this->content['country'],
    //             'street'   => $this->content['street'],
    //             'city'     => $this->content['city'],
    //             'state'    => $this->content['state'],
    //             'zip_code' => $this->content['zip_code'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion Directions */
    //     public function submitDirections()
    //     {
    //         $validation = Validator::make([
    //            'directions'  => $this->content['directions'],
    //         ],[
    //             'directions'  => 'required|max:250',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'directions'  => $this->content['directions'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion Guest Manual */
    //     public function submitGuesManual()
    //     {
    //         $validation = Validator::make([
    //            'guest_manual'  => $this->content['guest_manual'],
    //         ],[
    //             'guest_manual'  => 'required|max:250',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'guest_manual'  => $this->content['guest_manual'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion Arrival Instruccion */
    //     public function submitArrivalInstuct()
    //     {
    //         $validation = Validator::make([
    //            'arrival_instructions'  => $this->content['arrival_instructions'],
    //         ],[
    //             'arrival_instructions'  => 'required|in:Smart lock,Keypad,Lockbox,Building staff,Host greets you,Other',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'arrival_instructions'  => $this->content['arrival_instructions'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion Wifi Details */
    //     public function submitWifiDetails()
    //     {
    //         $validation = Validator::make([
    //            'wifi_details'  => $this->content['wifi_details'],
    //         ],[
    //             'wifi_details'  => 'required',
    //         ]);

    //             if ($validation->fails())
    //                 $validation->validate();
            
    //         ListingBookingDetails::where([
    //             'user_id'    => Auth::id(),
    //             'listing_id' => $this->listing,
    //         ])->update([
    //             'wifi_details'  => $this->content['wifi_details'],
    //         ]);

    //         $this->alert('success', 'Update has been successful!');
    //         $this->reset(['classActive']);
    //         $this->queryFourBars($this->listing);
    //     }

    // /* Seccion ModalFeedBack */
    //     public function modalFeedback()
    //     {
    //         $this->dispatchBrowserEvent('openModalFeedback');
    //     }
}