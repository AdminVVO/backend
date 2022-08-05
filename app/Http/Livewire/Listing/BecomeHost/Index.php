<?php

namespace App\Http\Livewire\Listing\BecomeHost;

use App\Models\AmenitiesSafety;
use App\Models\Listing\ListingBookingDetails;
use App\Models\Listing\ListingCalendarAvailability;
use App\Models\Listing\ListingHouseRulers;
use App\Models\Listing\ListingLocation;
use App\Models\Listing\ListingPolicies;
use App\Models\Listing\ListingPricing;
use App\Models\Listing\ListingPropertyRoomd;
use App\Models\Listing\Listings;
use App\Models\Listing\PreListing;
use App\Models\RoomsProperty;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;
use Storage;

class Index extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $step = 'become';
    public $imgShow = 'listing.jpg';
    public $preListing = [];
    public $property;
    public $property_type;
    public $contentPreview;

    ## Form ID Pre Listing
        public $id_prelisting;

    ## Form Propery
        public $inputProperty = 'apartment';
    
    ## Form Group Propery
        public $inputGroup;
    
    ## Form Privacy
        public $inputPrivacy = 'entire_place';
    
    ## Form Map
        public $inputLong;
        public $inputLat;

    ## Form Location
        public $inputCountry;
        public $inputRegion;
        public $inputCity;
        public $inputPostcode;
        public $inputStreet;
        public $inputSuite;

    ## Form Floor
        public $inputGuests = 4;
        public $inputBeds = 1;
        public $inputBedrooms = 1;
        public $inputBathrooms = 1;

    ## Form Amenities
        public $inputAmenities = [];

    ## Form Photos
        public $inputPhotos;
        public $inputNew;

    ## Form Title
        public $inputTitle;

    ## Form Aspect
        public $inputAspect = [];

    ## Form Description
        public $inputDescription = 'Take a break and relax in this tranquil oasis.';

    ## Form Price
        public $inputPrice = 50;
        public $inputDiscount = true;

    ## Form Legal
        public $inputLegal = [];


    protected $listeners = [
        'LngLat' => 'LngLat',
        'receivePhotos' => 'receivePhotos',
    ];
    
    public function mount()
    {
        $this->preListing = PreListing::select('id_pre_listings', 'propery', 'photos', 'created_at')->where([
            'user_id' => Auth::id(),
        ])->orderBy('updated_at', 'DESC')->get();
    }

    public function render()
    {
        $this->imgShow = $this->ShowImg( $this->step, $this->inputProperty );
        return view('livewire.listing.become-host.index');
    }

    public function nextShow()
    {
        if ( $this->step === 'become' ){
            $this->reset(['property','property_type','contentPreview','id_prelisting','inputProperty','inputGroup','inputPrivacy','inputLong','inputLat','inputCountry','inputRegion','inputCity','inputPostcode','inputStreet','inputSuite','inputGuests','inputBeds','inputBedrooms','inputBathrooms','inputAmenities','inputPhotos','inputNew','inputTitle','inputAspect','inputDescription','inputPrice','inputDiscount','inputLegal']);
            return $this->step = 'intro';
        }

        if ( $this->step === 'intro' ){
            $this->property = RoomsProperty::select('file', 'name_type', 'type')->distinct(['type'])->get()->toArray();
            return $this->step = 'property';
        }

        if ( $this->step === 'property' ){
            $this->property_type = RoomsProperty::select('code', 'name', 'comment', 'file_comm')->where(['type' => $this->inputProperty])->get()->toArray();
                $this->inputGroup = $this->property_type[0]['code'];

            return $this->step = 'group';
        }

        if ( $this->step === 'group' ){
            return $this->step = 'privacy';
        }

        if ( $this->step === 'privacy' ){
            return $this->step = 'location';
        }

        if ( $this->step === 'location' ){
            if ( $this->inputLong == null || $this->inputLat == null )
                return $this->alert('warning', 'You must select a waypoint.');

            $this->preloadLocationMap();
            return $this->step = 'location-form';
        }

        if ( $this->step === 'location-form' ){
            $this->validateLocation();
            return $this->step = 'floor';
        }

        if ( $this->step === 'floor' ){
            return $this->step = 'amenities';
        }

        if ( $this->step === 'amenities' ){
            if ( $this->inputPhotos != null )
                return $this->step = 'order-photos';

            return $this->step = 'photos';
        }

        if ( $this->step === 'photos' ){
            return $this->emitTo('listing.become-host.includes.photos', 'loadPhotos');
        }

        if ( $this->step === 'order-photos' )
            return $this->step = 'title';

        if ( $this->step === 'title' ){
            $this->validateTitle();
            return $this->step = 'aspect';
        }

        if ( $this->step === 'aspect' ){
            return $this->validateAspect();
        }

        if ( $this->step === 'description' ){
            $this->validateDescription();
            return $this->step = 'price';
        }

        if ( $this->step === 'price' ){
            return $this->validatePrice();
        }

        if ( $this->step === 'legal' ){
            $this->orderContent();
            return $this->step = 'preview';
        }
    }

    public function BackShow()
    {
        if ( $this->step === 'property' )
            return $this->step = 'intro';

        if ( $this->step === 'group' )
            return $this->step = 'property';

        if ( $this->step === 'privacy' )
            return $this->step = 'group';

        if ( $this->step === 'location' )
            return $this->step = 'privacy';

        if ( $this->step === 'location-form' )
            return $this->step = 'location';

        if ( $this->step === 'floor' )
            return $this->step = 'location-form';

        if ( $this->step === 'amenities' )
            return $this->step = 'floor';

        if ( $this->step === 'photos' )
            return $this->step = 'amenities';

        if ( $this->step === 'order-photos' ){
            if ( $this->inputPhotos == null )
                return $this->step = 'photos';
            
            return $this->step = 'amenities';
        }

        if ( $this->step === 'title' )
            return $this->step = 'order-photos';

        if ( $this->step === 'aspect' )
            return $this->step = 'title';

        if ( $this->step === 'description' )
            return $this->step = 'aspect';

        if ( $this->step === 'price' )
            return $this->step = 'description';

        if ( $this->step === 'legal' )
            return $this->step = 'price';

        if ( $this->step === 'preview' )
            return $this->step = 'legal';
    }
    
    public function LngLat($payload)
    {
        $this->inputLong = $payload['lng'];
        $this->inputLat = $payload['lat'];
    }
    
    public function preloadLocationMap()
    {
        $client = new \GuzzleHttp\Client();
        $endpoint = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' . $this->inputLong . ',' . $this->inputLat . '.json';
            $response = $client->request('GET', $endpoint, ['query' => [
                'access_token' => 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg', 
            ]]);

            $statusCode = $response->getStatusCode();
            $content = json_decode($response->getBody(), true);

        if ( $statusCode === 200 )
            foreach ( $content['features'] as $key => $value ) {

                if ( $value['place_type'][0] === 'postcode' )
                    $this->inputPostcode = $value['text'];

                if ( $value['place_type'][0] === 'place' )
                    $this->inputCity = $value['text'];

                if ( $value['place_type'][0] === 'region' )
                    $this->inputRegion = $value['text'];

                if ( $value['place_type'][0] === 'country' )
                    $this->inputCountry = $value['text'];
            }
    }
    
    public function validateLocation()
    {
        $this->resetValidation();
        $validation = Validator::make([
            'inputStreet'   => $this->inputStreet,
            'inputSuite'    => $this->inputSuite,
            'inputCity'     => $this->inputCity,
            'inputRegion'   => $this->inputRegion,
            'inputPostcode' => $this->inputPostcode,
            'inputCountry'  => $this->inputCountry,
        ],[
            'inputStreet'   => 'required',
            'inputSuite'    => '',
            'inputCity'     => 'required',
            'inputRegion'   => 'required',
            'inputPostcode' => 'regex:/^[0-9]+$/',
            'inputCountry'  => 'required',
        ]);
            
            if ($validation->fails())
                $validation->validate();
    }
    
    public function validateTitle()
    {
        $this->resetValidation();
        $validation = Validator::make([
           'inputTitle' => $this->inputTitle,
        ],[
            'inputTitle' => 'required|max:50',
        ]);

            if ($validation->fails())
                $validation->validate();
    }
    
    public function validateDescription()
    {
        $this->resetValidation();
        $validation = Validator::make([
           'inputDescription' => $this->inputDescription,
        ],[
            'inputDescription' => 'required|max:500',
        ]);

            if ($validation->fails())
                $validation->validate();
    }
    
    public function validateAspect()
    {
        $this->resetValidation();
        $validation = Validator::make([
           'inputAspect' => $this->inputAspect,
        ],[
            'inputAspect' => 'array|min:2|max:2',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select at least 2 options.');

        $this->step = 'description';

    }
    
    public function validatePrice()
    {
        $this->resetValidation();
        $validation = Validator::make([
           'inputPrice' => $this->inputPrice,
        ],[
            'inputPrice' => 'required|integer|between:10,10000',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'The price does not meet the requirements.');

        $this->step = 'legal';
    }
    
    public function orderContent()
    {
        $suite = $this->inputSuite != null ? ', ' . $this->inputSuite : '';

        $amenities = [];
        $queryAmenities = AmenitiesSafety::whereIn('code', $this->inputAmenities )->select('name', 'code')->get()->toArray();
            foreach ( $queryAmenities as $key => $value) {
                $amenities[ $key ]['code'] = $value['name'];
                $amenities[ $key ]['icon'] = $this->Icons( $value['code'] );
            }

        $this->contentPreview = [
            'img' => $this->inputPhotos[0],
            'property' => RoomsProperty::Property( $this->inputProperty ),
            'group' => RoomsProperty::Group( $this->inputGroup ),
            'title' => $this->inputTitle,
            'description' => $this->inputDescription,
            'guest' => $this->inputGuests,
            'bed' => $this->inputBeds,
            'bedrooms' => $this->inputBedrooms,
            'bathrooms' => $this->inputBathrooms,
            'amenities' => $amenities,
            'latitud' => $this->inputLat,
            'longitude' => $this->inputLong,
            'location' => "{$this->inputCountry}, {$this->inputRegion}, {$this->inputCity}, {$this->inputPostcode}, {$this->inputStreet}{$suite}",
        ];
    }

    public function buttonDecrease($paylaod)
    {
        if ( $paylaod === 'inputGuests' ) 
            $this->inputGuests -= 1;

        if ( $paylaod === 'inputBeds' ) 
            $this->inputBeds -= 1;
        
        if ( $paylaod === 'inputBedrooms' ) 
            $this->inputBedrooms -= 1;
        
        if ( $paylaod === 'inputBathrooms' ) 
            $this->inputBathrooms -= 1;
        
        if ( $paylaod === 'inputPrice' ) 
            $this->inputPrice -= 5;

    }

    public function buttonIncrease($paylaod)
    {
        if ( $paylaod === 'inputGuests' ) 
            $this->inputGuests += 1;

        if ( $paylaod === 'inputBeds' ) 
            $this->inputBeds += 1;
        
        if ( $paylaod === 'inputBedrooms' ) 
            $this->inputBedrooms += 1;
        
        if ( $paylaod === 'inputBathrooms' ) 
            $this->inputBathrooms += 1;
        
        if ( $paylaod === 'inputPrice' ) 
            $this->inputPrice += 5;
    }
    
    public function receivePhotos($paylaod)
    {
        $this->inputPhotos = $paylaod;
        $this->step = 'order-photos';
    }
 
    public function updatedinputNew($value)
    {
        foreach ( $value as $key => $element ) {
            $nameOriginal = $element->getClientOriginalName();
            $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
            $filename = Str::random(10) . '.' . $extension;

            $this->inputPhotos[] = $filename;
                $element->storeAs('photos-pre-listing', $filename, 'public');
        }

        $this->reset('inputNew');
    }

    public function changeCover($payload)
    {
        $this->inputPhotos = $this->changeArray( $this->inputPhotos, $payload, 0);
    }
 
    public function changeDown($payload)
    {
        $this->inputPhotos = $this->changeArray( $this->inputPhotos, $payload, $payload + 1);
    }
 
    public function changeUp($payload)
    {
        $this->inputPhotos = $this->changeArray( $this->inputPhotos, $payload, $payload - 1);
    }


    public function changeArray($array, $value1, $value2)
    {
        $positionOne = array_splice($array, $value1, 1);
        $positionTwo = array_splice($array, 0, $value2);
        return array_merge( $positionTwo, $positionOne, $array );
    }

    public function Icons($payload)
    {
        switch ( $payload ) {

            case 'pool':
                return 'pool-blu.svg';
                break;

            case 'hot_tub':
                return 'hot-blu.svg';
                break;

            case 'patio':
                return 'patio-blu.svg';
                break;

            case 'bbq_grill':
                return 'grill-blu.svg';
                break;

            case 'fire_pit':
                return 'fire-blu.svg';
                break;

            case 'pool_table':
                return 'table-blu.svg';
                break;

            case 'indoor_fireplace':
                return 'indoor-blu.svg';
                break;

            case 'outdoor_dining':
                return 'outdoor-blu.svg';
                break;

            case 'exercise_equipment':
                return 'exercise-blu.svg';
                break;

            case 'wifi':
                return 'wifi-blu.svg';
                break;

            case 'tv':
                return 'tv-blu.svg';
                break;

            case 'kitchen':
                return 'kitchen-blu.svg';
                break;

            case 'washer':
                return 'washer-blu.svg';
                break;

            case 'free_parking':
                return 'parking-blu.svg';
                break;

            case 'paid_parking':
                return 'paid-blu.svg';
                break;

            case 'air_conditioning':
                return 'air-blu.svg';
                break;

            case 'dedicated_worspace':
                return 'dedicated-blu.svg';
                break;

            case 'outdoor_shower':
                return 'shower-blu.svg';
                break;

            case 'smoke_alarm':
                return 'smoke-blu.svg';
                break;

            case 'first_kit':
                return 'first-blu.svg';
                break;

            case 'monoxide_alarm':
                return 'carbon-blu.svg';
                break;

            case 'fire_extinguisher':
                return 'extinguisher-blu.svg';
                break;
        }
    }

    public function continueListing($payload)
    {
        $preListing = PreListing::where([
            'id_pre_listings' => $payload,
            'user_id' => Auth::id(),
        ])->first();
        
        $this->id_prelisting = $preListing['id_pre_listings'];
        $this->property = RoomsProperty::select('file', 'name_type', 'type')->distinct(['type'])->get()->toArray();
        $this->inputProperty = $preListing['propery'];
            $this->property_type = RoomsProperty::select('code', 'name', 'comment', 'file_comm')->where(['type' => $this->inputProperty])->get()->toArray();
        $this->inputGroup = $preListing['group'];
        $this->inputPrivacy = $preListing['privacy'];
        $this->inputLong = $preListing['longitude'];
        $this->inputLat = $preListing['latitude'];
        $this->inputCountry = $preListing['country'];
        $this->inputRegion = $preListing['region'];
        $this->inputCity = $preListing['city'];
        $this->inputPostcode = $preListing['postcode'];
        $this->inputStreet = $preListing['street'];
        $this->inputSuite = $preListing['suite'];
        $this->inputGuests = $preListing['guest'];
        $this->inputBeds = $preListing['bed'];
        $this->inputBedrooms = $preListing['bedroom'];
        $this->inputBathrooms = $preListing['bathroom'];
        $this->inputAmenities = $preListing['amenities'];
        $this->inputPhotos = $preListing['photos'];
        $this->inputTitle = $preListing['title'];
        $this->inputAspect = $preListing['aspect'];
        $this->inputDescription = $preListing['description'];
        $this->inputPrice = $preListing['price'];
        $this->inputDiscount = $preListing['discount'];
        $this->inputLegal = $preListing['legal'];
        $this->step = $preListing['status'];

            if ( $this->step === 'preview' )
                $this->orderContent();
    }

    public function saveToExit()
    {
        $user = PreListing::updateOrCreate(
            [
                'id_pre_listings' => $this->id_prelisting,
                'user_id' => Auth::id()
            ],
            [
                'status' => $this->step,
                'propery' => $this->inputProperty,
                'group' => $this->inputGroup,
                'privacy' => $this->inputPrivacy,
                'longitude' => $this->inputLong,
                'latitude' => $this->inputLat,
                'country' => $this->inputCountry,
                'region' => $this->inputRegion,
                'city' => $this->inputCity,
                'postcode' => $this->inputPostcode,
                'street' => $this->inputStreet,
                'suite' => $this->inputSuite,
                'guest' => $this->inputGuests,
                'bed' => $this->inputBeds,
                'bedroom' => $this->inputBedrooms,
                'bathroom' => $this->inputBathrooms,
                'amenities' => $this->inputAmenities,
                'photos' => $this->inputPhotos,
                'title' => $this->inputTitle,
                'aspect' => $this->inputAspect,
                'description' => $this->inputDescription,
                'price' => $this->inputPrice,
                'discount' => $this->inputDiscount,
                'legal' => $this->inputLegal
            ]
        );

        $this->flash('success', 'listing has been saved successfully', [], route('become-host'));
    }

    public function ShowImg($payload, $payload2)
    {
        if ( $payload === 'group' || $payload === 'privacy' ) {
            switch ( $payload2 ) {
                case 'apartment':
                    return 's1.jpg';
                    break;

                case 'house':
                    return 's2.jpg';
                    break;

                case 'secondary':
                    return 's3.jpg';
                    break;

                case 'unique':
                    return 's4.jpg';
                    break;

                case 'breakfast':
                    return 's5.jpg';
                    break;

                case 'boutique':
                    return 's6.jpg';
                    break;
            }
        } else {
            switch ( $payload ) {
                case 'property':
                    return 'step.jpg';
                    break;

                case 'location':
                case 'location-form':
                    return 'step4.jpg';
                    break;

                case 'floor':
                    return 'step5.jpg';
                    break;

                case 'amenities':
                    return 'step6.jpg';
                    break;

                case 'photos':
                case 'order-photos':
                    return 'step7.jpg';
                    break;

                case 'title':
                    return 'step8.jpg';
                    break;

                case 'aspect':
                case 'description':
                    return 's9.jpg';
                    break;

                case 'price':
                    return 'step10.jpg';
                    break;

                case 'legal':
                    return 'step11.jpg';
                    break;

                case 'preview':
                    return 'stepq11.jpg';
                    break;

                case 'congratulations':
                    return 's12.jpg';
                    break;

                default:
                    return 'listing.jpg';
                    break;
            }
        }
    }

    public function publishListing()
    {
        $photos = [];
        foreach ( $this->inputPhotos as $key => $value ) {
            $photos[ $key ]['name'] =  $value;
            $photos[ $key ]['comment'] =  '';
        };

        $Listings = Listings::create([
            'title'          => $this->inputTitle,
            'internal_title' => Str::random(2) . '-' . substr( str_shuffle( 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' ), 0, 4) . ' ' . strtoupper( $this->inputProperty ),
            'number_guests'  => $this->inputGuests,
            'descriptions'   => $this->inputDescription,
            'amenities'      => $this->inputAmenities,
            'photos'         => $photos,
            'aspect'         => $this->inputAspect,
            'legal'          => $this->inputLegal,
            'user_id'        => Auth::id(),
        ]);

        ListingPropertyRoomd::create([
            'like_place'    => $this->inputProperty,
            'property_type' => $this->inputGroup,
            'listing_type'  => $this->inputPrivacy,
            'bed'           => $this->inputBeds,
            'bedrooms'      => $this->inputBedrooms,
            'bathrooms'     => $this->inputBathrooms,
            'listing_id'    => $Listings['id_listings'],
            'user_id'       => Auth::id(),
        ]);

        ListingLocation::create([
            'country'    => $this->inputCountry,
            'street'     => $this->inputStreet,
            'city'       => $this->inputCity,
            'state'      => $this->inputRegion,
            'suite'      => $this->inputSuite,
            'zip_code'   => $this->inputPostcode,
            'latitude'   => $this->inputLat,
            'longitude'  => $this->inputLong,
            'listing_id' => $Listings['id_listings'],
            'user_id'    => Auth::id(),
        ]);

        ListingPricing::create([
            'base_price' => $this->inputPrice,
            'first_guest'=> $this->inputDiscount,
            'listing_id' => $Listings['id_listings'],
            'user_id'    => Auth::id(),
        ]);

        ListingCalendarAvailability::create([
            'listing_id'    => $Listings['id_listings'],
            'user_id'       => Auth::id(),
        ]);

        ListingHouseRulers::create([
            'listing_id'    => $Listings['id_listings'],
            'user_id'       => Auth::id(),
        ]);

        ListingPolicies::create([
            'listing_id'    => $Listings['id_listings'],
            'user_id'       => Auth::id(),
        ]);

        ListingBookingDetails::create([
            'listing_id'    => $Listings['id_listings'],
            'user_id'       => Auth::id(),
        ]);

        $xplodeListing = Listings::ListingFile( $Listings['id_listings'] );
        foreach ( $this->inputPhotos as $value ) {
            if (Storage::disk('photos-pre-listing')->exists( $value )) {
                Storage::move("public/photos-pre-listing/{$value}", "public/photos-listing/{$xplodeListing}/{$value}");
            }
        }

        if ( $this->id_prelisting )
            $flight = PreListing::where('id_pre_listings', $this->id_prelisting )->forceDelete();

        $this->id_prelisting = $Listings['id_listings'];
        return $this->step = 'publish';
    }
}