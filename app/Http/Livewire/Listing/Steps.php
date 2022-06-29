<?php

namespace App\Http\Livewire\Listing;

use App\Models\AddressListing;
use App\Models\GuestsListing;
use App\Models\Listing\ListingBookingDetails;
use App\Models\Listing\ListingCalendarAvailability;
use App\Models\Listing\ListingHouseRulers;
use App\Models\Listing\ListingLocation;
use App\Models\Listing\ListingPolicies;
use App\Models\Listing\ListingPricing;
use App\Models\Listing\ListingPropertyRoomd;
use App\Models\Listing\Listings;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Storage;
use Str;

class Steps extends Component
{
    use LivewireAlert;
    
    public $exitSave = false;
    public $imgShow = 'listing.jpg';
    public $step = 'finish';
    public $content = [
        'host' => '',
        'description' => '',
        'space' => '',
        'location' => [],
        'address' => [],
        'guests' => [],
        'offers' => [],
        'photos' => [],
        'oldPhotos' => [],
        'placeTitle' => '',
        'category' => [],
        'placeComment' => '',
        'prices' => [],
        'featurs' => [],
    ];
    public $url = '';
    public $listinEdit = '';

    public $listeners = [
        'returnBack',
        'next',
        'continueCreate',
        'enterManuallyMaps',
        'enterLocation',
    ];

    public function render()
    {
        $this->emit('emitLocation', $this->content['location']);
        return view('livewire.listing.steps');
    }

    public function ShowImg($payload)
    {
        switch ( $payload ) {
            case 'host':
                return 'step.jpg';
                break;

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

            case 'maps':
                return 'step4.jpg';
                break;

            case 'mapsmanually':
                return 'step4.jpg';
                break;

            case 'guests':
                return 'step5.jpg';
                break;

            case 'offersplaces':
                return 'step6.jpg';
                break;

            case 'photos':
                return 'step7.jpg';
                break;

            case 'describeToPlacesTitle':
                return 'step8.jpg';
                break;

            case 'describeToPlacesOptions':
                return 's9.jpg';
                break;

            case 'describeToPlacesComment':
                return 's9.jpg';
                break;

            case 'prices':
                return 'step10.jpg';
                break;

            case 'featurs':
                return 'step11.jpg';
                break;

            case 'checklisting':
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

    public function returnBack($payload)
    {
        if ( $payload === 'notDefine')
            $payload = $this->content['host'];

        if ( $payload === 'photos') {
            $folderAuth = Auth::user()->name . '-' . Auth::id();

            if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) )
                File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
        }

        $this->step = $payload;
        $this->imgShow = $this->ShowImg( $payload == 'init' ? '' : $payload );
        $this->exitSave = $payload == 'init' || $payload == 'finish' || $payload == 'congratulations' || $payload == 'host' ? false : true;
    }
    
    public function next($payload)
    {
        if ( $payload['from'] === 'finish' )
            $this->step = $payload['to'];

        if ( $payload['from'] === 'letGo' ){
            $this->step = $payload['to'];
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'host' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'host' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }
        if ( $payload['from'] === 'description' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'description' );
        }

        if ( $payload['from'] === 'space' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'space' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'maps' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'location' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'mapsmanually' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'address' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'guest' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'guests' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'offersplaces' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'offers' );
            $this->imgShow = $this->ShowImg( $payload['img'] );

            $folderAuth = Auth::user()->name . '-' . Auth::id();

            if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) )
                File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
        }

        if ( $payload['from'] === 'photos' ){
            $this->step = $payload['to'];
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'photosAll' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'photos' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'describeToPlacesTitle' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'placeTitle' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'describeToPlacesOptions' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'category' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'describeToPlacesComment' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'placeComment' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'prices' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'prices' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'featurs' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'featurs' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'checklisting' ){
            $this->step = $payload['to'];
            $this->sendChecklisting();
            $this->imgShow = $this->ShowImg( $payload['img'] );
            $this->exitSave = $payload['to'] == 'congratulations' ? false : true;

        }

        $this->exitSave = $this->step == 'letGo' || $this->step == 'finish' || $this->step == 'congratulations' || $this->step == 'host' ? false : true;
    }

    public function saveData($payload, $index)
    {
        $this->content[ $index ] = $payload;
    }

    public function enterManuallyMaps($payload)
    {
        $this->step = $payload;
    }

    public function sendChecklisting()
    {
        $folderAuth = Auth::user()->name . '-' . Auth::id();

        if ( $this->listinEdit == '' ){

            $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $internalTitle = Str::random(2) . '-' . substr( str_shuffle( $permitted_chars ), 0, 4) . ' ' . strtoupper( $this->content['host'] );

            $Listings = Listings::create([
                'step'           => $this->step,
                'title'          => $this->content['placeTitle'],
                'internal_title' => $internalTitle,
                'number_guests'  => $this->content['guests']['guests'],
                'descriptions'   => $this->content['placeComment'],
                'amenities'      => isset( $this->content['offers']['amenities'] ) ? $this->content['offers']['amenities'] : $this->content['offers'] ,
                'safety'         => isset( $this->content['offers']['safety'] ) ? $this->content['offers']['safety'] : $this->content['offers'] ,
                'photos'         => $this->content['photos'],
                'category'       => $this->content['category'],
                'featurs'        => $this->content['featurs'],
                'status'         => 'Listed',
                'user_id'        => Auth::id(),
            ]);

            ListingPropertyRoomd::create([
                'like_place'    => $this->content['host'],
                'property_type' => $this->content['description'],
                'listing_type'  => $this->content['space'],
                'bed'           => $this->content['guests']['beds'],
                'bedrooms'      => $this->content['guests']['bedrooms'],
                'bathrooms'     => $this->content['guests']['bathrooms'],
                'listing_id'    => $Listings['id_listings'],
                'user_id'       => Auth::id(),
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

            if ( !empty( $this->content['address'] ) )
                ListingLocation::create([
                    'country'    => $this->content['address']['country'],
                    'street'     => $this->content['address']['street'],
                    'city'       => $this->content['address']['city'],
                    'state'      => $this->content['address']['state'],
                    'suite'      => $this->content['address']['suite'],
                    'zip_code'   => $this->content['address']['zip_code'],
                    'latitude'   => $this->content['location']['latitude'],
                    'longitude'  => $this->content['location']['longitude'],
                    'listing_id' => $Listings['id_listings'],
                    'user_id'    => Auth::id(),
                ]);

            if ( $this->content['prices'] != 0 )
                ListingPricing::create([
                    'base_price' => $this->content['prices']['base'],
                    'first_guest'=> $this->content['prices']['first_guest'],
                    'listing_id' => $Listings['id_listings'],
                    'user_id'    => Auth::id(),
                ]);
        }

        if ( $this->listinEdit != '' ){
            Listings::where([
                'user_id' => Auth::id(),
                'id_listings' => $this->listinEdit,
            ])->update([
                'step'           => $this->step,
                'title'          => $this->content['placeTitle'],
                'number_guests'  => $this->content['guests']['guests'],
                'descriptions'   => $this->content['placeComment'],
                'amenities'      => isset( $this->content['offers']['amenities'] ) ? $this->content['offers']['amenities'] : $this->content['offers'] ,
                'safety'         => isset( $this->content['offers']['safety'] ) ? $this->content['offers']['safety'] : $this->content['offers'] ,
                'photos'         => $this->content['photos'],
                'category'       => $this->content['category'],
                'featurs'        => $this->content['featurs'],
                'status'         => 'Listed',
            ]); 

           ListingPropertyRoomd::where([
                'user_id' => Auth::id(),
                'listing_id' => $this->listinEdit,
            ])->update([
                'like_place'    => $this->content['host'],
                'property_type' => $this->content['description'],
                'listing_type'  => $this->content['space'],
                'bed'           => $this->content['guests']['beds'],
                'bedrooms'      => $this->content['guests']['bedrooms'],
                'bathrooms'     => $this->content['guests']['bathrooms'],
            ]);

            if ( !empty($this->content['address']) )
                ListingLocation::where([
                    'user_id' => Auth::id(),
                    'listing_id' => $this->listinEdit,
                ])->update([
                    'country'   => $this->content['address']['country'],
                    'street'    => $this->content['address']['street'],
                    'city'      => $this->content['address']['city'],
                    'state'     => $this->content['address']['state'],
                    'suite'     => $this->content['address']['suite'],
                    'zip_code'  => $this->content['address']['zip_code'],
                    'latitude'  => $this->content['location']['latitude'],
                    'longitude' => $this->content['location']['longitude'],
                ]);

            if ( $this->content['prices'] != 0 )
                ListingPricing::where([
                    'user_id' => Auth::id(),
                    'listing_id' => $this->listinEdit,
                ])->update([
                    'base_price' => $this->content['prices']['base'],
                    'first_guest'=> $this->content['prices']['first_guest'],
                ]);
        }

        if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) ){
            foreach ($this->content['photos'] as $key => $value) {
                $explodeName = explode('-', $value);
                    $fileIn = 'public/tempFilepond/' . $folderAuth . '/' . $explodeName[1];
                $fileOut = 'public/uploadListing/' . $value;

                Storage::copy($fileIn, $fileOut);
            }

            File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );

            if ( !empty( $this->content['oldPhotos'] ) ) {
                foreach ($this->content['oldPhotos'] as $key => $value) {
                    Storage::disk('uploadListing')->delete( $value );
                }
            }
        }

        $this->url = $this->listinEdit != '' ? $this->listinEdit : $Listings['id_listings'] ;
        $this->alert('success', 'Your listing will be published soon.');
    }

    public function saveToExit()
    {
        $folderAuth = Auth::user()->name . '-' . Auth::id();
        
        if ( $this->content['host'] == '')
            return redirect()->route('listing');

        if ( $this->listinEdit == '' ){

            $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $internalTitle = Str::random(2) . '-' . substr( str_shuffle( $permitted_chars ), 0, 4) . ' ' . strtoupper( $this->content['host'] );

            $Listings = Listings::create([
                'step'           => $this->step,
                'title'          => $this->content['placeTitle'],
                'internal_title' => $internalTitle,
                'number_guests'  => isset( $this->content['guests']['guests'] ) ? $this->content['guests']['guests'] : 0,
                'descriptions'   => $this->content['placeComment'],
                'amenities'      => isset( $this->content['offers']['amenities'] ) ? $this->content['offers']['amenities'] : $this->content['offers'] ,
                'safety'         => isset( $this->content['offers']['safety'] ) ? $this->content['offers']['safety'] : $this->content['offers'] ,
                'photos'         => $this->content['photos'],
                'category'       => $this->content['category'],
                'featurs'        => $this->content['featurs'],
                'user_id'        => Auth::id(),
            ]);

            ListingPropertyRoomd::create([
                'like_place'    => $this->content['host'],
                'property_type' => $this->content['description'],
                'listing_type'  => $this->content['space'],
                'bed'           => isset( $this->content['guests']['beds'] ) ? $this->content['guests']['beds'] : 0,
                'bedrooms'      => isset( $this->content['guests']['bedrooms'] ) ? $this->content['guests']['bedrooms'] : 0,
                'bathrooms'     => isset( $this->content['guests']['bathrooms'] ) ? $this->content['guests']['bathrooms'] : 0,
                'listing_id'    => $Listings['id_listings'],
                'user_id'       => Auth::id(),
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

            if ( !empty( $this->content['address'] ) )
                ListingLocation::create([
                    'country'    => $this->content['address']['country'],
                    'street'     => $this->content['address']['street'],
                    'city'       => $this->content['address']['city'],
                    'state'      => $this->content['address']['state'],
                    'suite'      => $this->content['address']['suite'],
                    'zip_code'   => $this->content['address']['zip_code'],
                    'latitude'   => $this->content['location']['latitude'],
                    'longitude'  => $this->content['location']['longitude'],
                    'listing_id' => $Listings['id_listings'],
                    'user_id'    => Auth::id(),
                ]);

            if ( $this->content['prices'] != 0 )
                ListingPricing::create([
                    'base_price' => $this->content['prices']['base'],
                    'first_guest'=> $this->content['prices']['first_guest'],
                    'listing_id' => $Listings['id_listings'],
                    'user_id'    => Auth::id(),
                ]);
        }

        if ( $this->listinEdit != '' ){
            Listings::where([
                'user_id' => Auth::id(),
                'id_listings' => $this->listinEdit,
            ])->update([
                'step'           => $this->step,
                'title'          => $this->content['placeTitle'],
                'number_guests'  => isset( $this->content['guests']['guests'] ) ? $this->content['guests']['guests'] : 0,
                'descriptions'   => $this->content['placeComment'],
                'amenities'      => isset( $this->content['offers']['amenities'] ) ? $this->content['offers']['amenities'] : $this->content['offers'] ,
                'safety'         => isset( $this->content['offers']['safety'] ) ? $this->content['offers']['safety'] : $this->content['offers'] ,
                'photos'         => $this->content['photos'],
                'category'       => $this->content['category'],
                'featurs'        => $this->content['featurs'],
            ]); 

           ListingPropertyRoomd::where([
                'user_id' => Auth::id(),
                'listing_id' => $this->listinEdit,
            ])->update([
                'like_place'    => $this->content['host'],
                'property_type' => $this->content['description'],
                'listing_type'  => $this->content['space'],
                'bed'           => isset( $this->content['guests']['beds'] ) ? $this->content['guests']['beds'] : 0,
                'bedrooms'      => isset( $this->content['guests']['bedrooms'] ) ? $this->content['guests']['bedrooms'] : 0,
                'bathrooms'     => isset( $this->content['guests']['bathrooms'] ) ? $this->content['guests']['bathrooms'] : 0,
            ]);

            if ( !empty($this->content['address']) )
                ListingLocation::where([
                    'user_id' => Auth::id(),
                    'listing_id' => $this->listinEdit,
                ])->update([
                    'country'   => $this->content['address']['country'],
                    'street'    => $this->content['address']['street'],
                    'city'      => $this->content['address']['city'],
                    'state'     => $this->content['address']['state'],
                    'suite'     => $this->content['address']['suite'],
                    'zip_code'  => $this->content['address']['zip_code'],
                    'latitude'  => $this->content['location']['latitude'],
                    'longitude' => $this->content['location']['longitude'],
                ]);

            if ( $this->content['prices'] != 0 )
                ListingPricing::where([
                    'user_id' => Auth::id(),
                    'listing_id' => $this->listinEdit,
                ])->update([
                    'base_price' => $this->content['prices']['base'],
                    'first_guest'=> $this->content['prices']['first_guest'],
                ]);
        }

        if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) ){
            foreach ($this->content['photos'] as $key => $value) {
                $explodeName = explode('-', $value);
                    $fileIn = 'public/tempFilepond/' . $folderAuth . '/' . $explodeName[1];
                $fileOut = 'public/uploadListing/' . $value;

                Storage::copy($fileIn, $fileOut);
            }

            File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );

            if ( !empty( $this->content['oldPhotos'] ) ) {
                foreach ($this->content['oldPhotos'] as $key => $value) {
                    Storage::disk('uploadListing')->delete( $value );
                }
            }
        }

        $this->flash('success', 'listing has been saved successfully', [], route('listing'));
    }

    public function continueCreate($payload)
    {
        $Listings = Listings::select(
            'listings.id_listings',
            'listings.step',
            'listings.title',
            'listings.internal_title',
            'listings.number_guests',
            'listings.descriptions',
            'listings.amenities',
            'listings.safety',
            'listings.photos',
            'listings.category',
            'listings.featurs',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_property_roomds.listing_type',
            'listing_property_roomds.bed',
            'listing_property_roomds.bedrooms',
            'listing_property_roomds.bathrooms',
            'listing_locations.country',
            'listing_locations.street',
            'listing_locations.city',
            'listing_locations.state',
            'listing_locations.suite',
            'listing_locations.zip_code',
            'listing_locations.latitude',
            'listing_locations.longitude',
            'listing_pricings.base_price',
            'listing_pricings.first_guest',
        )->where([
            'listings.id_listings' => $payload,
            'listings.status'      => 'in process',
            'listings.user_id'     => Auth::id()
        ])
         ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
         ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
         ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
         ->whereNotIn('status', ['in process'])
         ->first();

        $this->listinEdit = $Listings['id_listings'];
        $this->step = $Listings['step'];
        $this->content['host'] = $Listings['like_place'];
        $this->content['description'] = $Listings['property_type'];
        $this->content['space'] = $Listings['listing_type'];
        $this->content['location'] = [
            'latitude' => $Listings['latitude'],
            'longitude' => $Listings['longitude']
        ];
        $this->content['address'] = [
            'country' => $Listings['country'],
            'city' => $Listings['city'],
            'state' => $Listings['state'],
            'street' => $Listings['street'],
            'suite' => $Listings['suite'],
            'zip_code' => $Listings['zip_code']
        ];
        $this->content['guests'] = [
            'guests' => $Listings['number_guests'],
            'beds' => $Listings['bed'],
            'bedrooms' => $Listings['bedrooms'],
            'bathrooms' => $Listings['bathrooms'],
        ];
        $this->content['offers']['amenities'] = $Listings['amenities'];
        $this->content['offers']['safety'] = $Listings['safety'];
        $this->content['photos'] = $Listings['photos'];
        $this->content['oldPhotos'] = $Listings['photos'];
            if ( empty( $this->content['photos'] ) ) {
                $folderAuth = Auth::user()->name . '-' . Auth::id();

                if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) )
                    File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
            };

        $this->content['placeTitle'] = $Listings['title'];
        $this->content['category'] = $Listings['category'];
        $this->content['placeComment'] = $Listings['descriptions'];
        $this->content['prices']['base'] = $Listings['base_price'];
        $this->content['prices']['first_guest'] = $Listings['first_guest'];
        $this->content['featurs'] = $Listings['featurs'];
        $this->imgShow = $this->ShowImg( $Listings['step'] );
        $this->exitSave = $Listings['step'] == 'init' || $Listings['step'] == 'finish' ? false : true;
    }
}