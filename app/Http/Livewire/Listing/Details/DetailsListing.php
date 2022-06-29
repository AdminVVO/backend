<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listing\Listings;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DetailsListing extends Component
{
    use LivewireAlert;

    private $idListint = 'bf559d7f-d778-4318-8c4a-14cd4052626a';
    public $stepBar = 'details';
    public $content = [];

    public function mount()
    {
        $this->stepBar = 'details';
        $this->contentDetails( $this->idListint );
    }

    public function render()
    {
        return view('livewire.listing.details.details-listing');
    }

    public function change($payload)
    {
        if ( $payload === 'pricing' ){
            return $this->stepBar = 'pricing';
        }
        
        if ( $payload === 'policies' ){
            return $this->stepBar = 'policies';
        }
        
        if ( $payload === 'guests' ){
            return $this->stepBar = 'guests';
        }
        
        if ( $payload === 'details' ){
            $this->contentDetails( $this->idListint );
            return $this->stepBar = 'details';
        }
    }

    public function contentDetails($payload)
    {
        $query = Listings::select(
            'listings.photos',
            'listings.title',
            'listings.internal_title',
            'listings.descriptions',
            'listings.space',
            'listings.guest_access',
            'listings.other_details',
            'listings.number_guests',
            'listings.custom_link',
            'listings.language_default',
            'listings.status',
            'listings.amenities',
            'listing_locations.country',
            'listing_locations.street',
            'listing_locations.city',
            'listing_locations.state',
            'listing_locations.suite',
            'listing_locations.zip_code',
            'listing_locations.neighborhood_description',
            'listing_locations.getting_around',
            'listing_locations.location_sharing',
            'listing_locations.privacy_cancellations',
            'listing_locations.latitude',
            'listing_locations.longitude',
            'listing_property_roomds.like_place',
            'listing_property_roomds.property_type',
            'listing_property_roomds.listing_type',
            'listing_property_roomds.floors',
            'listing_property_roomds.floors_on',
            'listing_property_roomds.bed',
            'listing_property_roomds.bedrooms',
            'listing_property_roomds.bathrooms'
        )->where([
            'listings.id_listings' => $payload,
            'listings.user_id'     => Auth::id()
        ])
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
        ->whereNotIn('status', ['in process'])
        ->first();

        $this->content['photos'] = $query['photos'];
        $this->content['title'] = $query['title'];
        $this->content['internal_title'] = $query['internal_title'];
        $this->content['descriptions'] = $query['descriptions'];
        $this->content['space'] = $query['space'];
        $this->content['guest_access'] = $query['guest_access'];
        $this->content['other_details'] = $query['other_details'];
        $this->content['number_guests'] = $query['number_guests'];
        $this->content['custom_link'] = $query['custom_link'];
        $this->content['language_default'] = $query['language_default'];
        $this->content['status'] = $query['status'];
        $this->content['amenities'] = $query['amenities'];
        $this->content['country'] = $query['country'];
        $this->content['street'] = $query['street'];
        $this->content['city'] = $query['city'];
        $this->content['state'] = $query['state'];
        $this->content['suite'] = $query['suite'];
        $this->content['zip_code'] = $query['zip_code'];
        $this->content['neighborhood_description'] = $query['neighborhood_description'];
        $this->content['getting_around'] = $query['getting_around'];
        $this->content['location_sharing'] = $query['location_sharing'];
        $this->content['privacy_cancellations'] = $query['privacy_cancellations'];
        $this->content['latitude'] = $query['latitude'];
        $this->content['longitude'] = $query['longitude'];
        $this->content['like_place'] = $query['like_place'];
        $this->content['property_type'] = $query['property_type'];
        $this->content['listing_type'] = $query['listing_type'];
        $this->content['floors'] = $query['floors'];
        $this->content['floors_on'] = $query['floors_on'];
        $this->content['bed'] = $query['bed'];
        $this->content['bedrooms'] = $query['bedrooms'];
        $this->content['bathrooms'] = $query['bathrooms'];

    }

    public function submitTitle()
    {
        $validation = Validator::make([
           'content.title' => $this->content['title'],
        ],[
            'content.title' => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();
            
        dd('asdasd');
    }

}