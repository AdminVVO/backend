<?php

namespace App\Http\Livewire\Listing\Init;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $listing = [];
    private $pagListing = [];
    protected $paginationTheme = 'bootstrap';

    public $inputSearch;
    public $inputBedrooms;
    public $inputBeds;
    public $inputBaths;
        public $inputRooms = false;

    public $inputContentRooms = [
        'inputBedrooms' => 0,
        'inputBeds' => 0,
        'inputBaths' => 0,
    ];

    public $orderBy = [
        'name' => 'created',
        'type' => 'ASC',
    ];

    public $inputAmenities = [];
        public $inputAmeni = false;

    public $inputStatus = [];
        public $inputStats = false;

    public $inputMore = [];
        public $inputMoref = false;

    public $inputClearAll = false;
    
    protected $queryString = [
        'inputSearch' => [
            'except' => '',
            'as' => 'search'
        ]
    ];

    public function mount()
    {
        $this->preloadContent();
    }

    public function updatedinputSearch($value)
    {
        $this->preloadContent();
    }

    public function render()
    {

        $items = $this->listing->forPage($this->page, 4);
        $this->pagListing = new LengthAwarePaginator($items, $this->listing->count(), 4, $this->page);

        return view('livewire.listing.init.index', [
            'pagListing' => $this->pagListing,
        ]);
    }

    public function nextPage()
    {
        $this->setPage($this->page + 1);
    }

    public function previousPage()
    {
        $this->setPage(max($this->page - 1, 1));
    }

    public function gotoPage($pag)
    {
        $this->setPage($pag);
    }

    public function preloadContent()
    {
        $this->listing = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'status',
            'photos',
            'created_at',
        )->with([
            'ListingPropertyRoomd:listing_id,like_place,bed,bedrooms,bathrooms',
            'ListingLocation:listing_id,city,state',
            'ListingPolicies:listing_id,instant_book'
        ])
        ->where('title', 'like', '%' . $this->inputSearch . '%')
        ->where(function ($query) {
            $query->whereHas('ListingPropertyRoomd', function ($query) {
                if ( $this->inputRooms ){
                    if ( $this->inputContentRooms['inputBedrooms'] != 0 )
                        $query->where('bedrooms', $this->inputContentRooms['inputBedrooms']);

                    if ( $this->inputContentRooms['inputBeds'] != 0 )
                        $query->where('bed', $this->inputContentRooms['inputBeds']);

                    if ( $this->inputContentRooms['inputBaths'] != 0 )
                        $query->where('bathrooms', $this->inputContentRooms['inputBaths']);
                }
            });

            $query->whereHas('ListingPolicies', function ($query) {
                if ( $this->inputMoref ){
                    if ( in_array('off', $this->inputMore) )
                        $query->where('instant_book', 'off');

                    // if ( in_array('updates', $this->inputMore) )
                        // $query->whereOr('bedrooms', $this->inputMore);
                }
            });

            if ( $this->inputAmeni )
                $query->whereJsonContains('amenities', $this->inputAmenities ); 
            
            if ( $this->inputStats )
                $query->whereIn('status', $this->inputStatus );    
        })
        ->where('user_id', Auth::id())
        ->get();

        // $this->pagListing = $this->listing;

        if ( $this->orderBy['type'] === 'ASC') {
            $this->listing = $this->listing->sortBy(function($query){
                if ( $this->orderBy['name'] == 'listing')
                    return $query->title;

                if ( $this->orderBy['name'] == 'created')
                    return $query->created_at;

                if ( $this->orderBy['name'] == 'status')
                    return $query->status;

                if ( $this->orderBy['name'] == 'location')
                    return $query->ListingLocation->city;

                if ( $this->orderBy['name'] == 'baths')
                    return $query->ListingPropertyRoomd->bathrooms;

                if ( $this->orderBy['name'] == 'beds')
                    return $query->ListingPropertyRoomd->bed;

                if ( $this->orderBy['name'] == 'bedrooms')
                    return $query->ListingPropertyRoomd->bedrooms;

                if ( $this->orderBy['name'] == 'instant')
                    return $query->ListingPolicies->instant_book;
            });
        }

        if ( $this->orderBy['type'] === 'DESC') {
            $this->listing = $this->listing->sortByDesc(function($query){
                if ( $this->orderBy['name'] == 'listing')
                    return $query->title;
                
                if ( $this->orderBy['name'] == 'created')
                    return $query->created_at;

                if ( $this->orderBy['name'] == 'status')
                    return $query->status;

                if ( $this->orderBy['name'] == 'location')
                    return $query->ListingLocation->city;

                if ( $this->orderBy['name'] == 'baths')
                    return $query->ListingPropertyRoomd->bathrooms;

                if ( $this->orderBy['name'] == 'beds')
                    return $query->ListingPropertyRoomd->bed;

                if ( $this->orderBy['name'] == 'bedrooms')
                    return $query->ListingPropertyRoomd->bedrooms;

                if ( $this->orderBy['name'] == 'instant')
                    return $query->ListingPolicies->instant_book;
            });
        }

        foreach ($this->listing as $key => $value) {
            if ( count( $value['photos'] ) == 0 ) {
                $this->listing[ $key ]['photos'] = $this->ShowImg( $value['like_place'] );
            }
        }

        // dd($this->pagListing);

    }

    public function ShowImg($payload)
    {
        switch ( $payload ) {
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

            default:
                return 'listing.jpg';
                break;
        }
    }

    public function buttonDecrease($paylaod)
    {
        if ( $paylaod === 'inputBedrooms' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputBeds' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

        if ( $paylaod === 'inputBaths' ) 
            $this->inputContentRooms[ $paylaod ] -= 1;

    }

    public function buttonIncrease($paylaod)
    {
        if ( $paylaod === 'inputBedrooms' ) 
            $this->inputContentRooms[ $paylaod ] += 1;

        if ( $paylaod === 'inputBeds' ) 
            $this->inputContentRooms[ $paylaod ] += 1;
        
        if ( $paylaod === 'inputBaths' ) 
            $this->inputContentRooms[ $paylaod ] += 1;
    }

    public function Apply($paylaod)
    {
        if ( $paylaod === 'inputRooms' ) 
            $this->inputRooms = true;

        if ( $paylaod === 'inputAmeni' )
            $this->inputAmeni = true;

        if ( $paylaod === 'inputStats' )
            $this->inputStats = true;

        if ( $paylaod === 'inputMoref' )
            $this->inputMoref = true;

        $this->inputClearAll = true;
        $this->preloadContent();
    }

    public function clear($paylaod)
    {
        if ( $paylaod === 'inputRooms' ) 
            $this->reset(['inputContentRooms','inputRooms']);

        if ( $paylaod === 'inputAmeni' ) 
            $this->reset(['inputAmenities','inputAmeni']);

        if ( $paylaod === 'inputStats' ) 
            $this->reset(['inputStatus','inputStats']);

        if ( $paylaod === 'inputMoref' ) 
            $this->reset(['inputMore','inputMoref']);
    }

    public function clearFiltr()
    {
        $this->reset(['inputContentRooms','inputRooms','inputAmenities','inputAmeni','inputStatus','inputStats','inputMore','inputMoref','inputClearAll']);
        $this->preloadContent();
    }

    public function sortBy($paylaod)
    {
        if ( $paylaod === 'listing' ){
            $this->orderBy['name'] = 'listing';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        if ( $paylaod === 'created' ){
            $this->orderBy['name'] = 'created';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        if ( $paylaod === 'status' ){
            $this->orderBy['name'] = 'status';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        if ( $paylaod === 'location' ){
            $this->orderBy['name'] = 'location';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        if ( $paylaod === 'baths' ){
            $this->orderBy['name'] = 'baths';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }
        
        if ( $paylaod === 'beds' ){
            $this->orderBy['name'] = 'beds';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        if ( $paylaod === 'bedrooms' ){
            $this->orderBy['name'] = 'bedrooms';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        if ( $paylaod === 'instant' ){
            $this->orderBy['name'] = 'instant';
            $this->orderBy['type'] = $this->orderBy['type'] === 'ASC' ? 'DESC' : 'ASC';
        }

        $this->preloadContent();
    }
}