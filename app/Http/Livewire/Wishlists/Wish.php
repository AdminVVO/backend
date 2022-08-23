<?php

namespace App\Http\Livewire\Wishlists;

use App\Models\Listing\Listings;
use App\Models\RoomsProperty;
use App\Models\Wishlists;
use Auth;
use Carbon;
use Livewire\Component;
use Prophecy\Doubler\LazyDouble;

use function PHPSTORM_META\map;

class Wish extends Component
{
    public $request;
    public $name;
    public $contentListing;
    public $contentCoordinate;
    public $preLoadCoordinate;
    public $wishlists;
    public $places;
    public $category;
    public $countListing;
    public $daysDiff = 0;
    public $preloadReturnMap = false;

    public $inputAdult = 0;
    public $inputKids = 0;
    public $inputInfant = 0;
    public $inputPets = 0;
    public $inputPrice;
    public $inputPlace;

    public $filter_categ = null;
    public $filterPrice = null;
    public $filterPlace = null;

    protected $listeners = [
        'reLoadRender' => 'reLoadRender',
        'removeListing' => 'removeListing',
    ];

    public function mount()
    {
        $this->places = RoomsProperty::pluck('name_type', 'type');
    }

    public function render()
    {
        $this->reset(['contentCoordinate', 'preLoadCoordinate', 'contentListing']);
        $this->preLoadContent();

        if (count($this->contentListing) != 0) {
            $this->preLoadCoordinate = [$this->contentListing[0]['longitude'], $this->contentListing[0]['latitude']];

            foreach ($this->contentListing as $key => $value) {
                $title = $value['title'];
                $price = $value['base_price'];
                $room = ucwords(RoomsProperty::TypeName($value['like_place'])  . ' - ' . RoomsProperty::PropertyName($value['property_type']));
                $photoInit1 = env('APP_URL') . '/storage/photos-listing/' .'/'. \App\Models\Listing\Listings::ListingFile( $value['id_listings'] ) .'/'. $value['photos'][0]['name'];
                $photo1 = "<img src='$photoInit1' alt='' class='card_img_active'>";
                $photoInit2 = env('APP_URL') . '/storage/photos-listing/' .'/'. \App\Models\Listing\Listings::ListingFile( $value['id_listings'] ) .'/'. $value['photos'][1]['name'];
                $photo2 = "<img src='$photoInit2' alt='' class='card_img_active'>";
                $photoInit3 = env('APP_URL') . '/storage/photos-listing/' .'/'. \App\Models\Listing\Listings::ListingFile( $value['id_listings'] ) .'/'. $value['photos'][2]['name'];
                $photo3 = "<img src='$photoInit3' alt='' class='card_img_active'>";
                $latitude = $value['latitude'];
                $longitude = $value['longitude'];
                $this->contentCoordinate[] = [
                    'type' => 'Feature',
                    'properties' => [
                        'description' => "<div class='card_items card_items_map'><div class='card_top'><div class='card_top_price'><i class='fas fa-dollar-sign'></i><p>$price / night</p></div><div class='card_top_dates'><i class='fas fa-calendar'></i><p>24 dec - 31 dec</p></div></div><button type='button' class='card_love showFavorite'><svg xmlns='http://www.w3.org/2000/svg' width='27.003' height='23.878' viewBox='0 0 27.003 23.878'><g transform='translate(1.002 -1.245)' fill='rgba(222,222,222,0.38)' stroke='#dedede' stroke-width='2'><path d='M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z'></path><path d='M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z'></path></g></svg></button><div class='card_img'>$photo1 $photo2 $photo3</div><div class='card_info'><div class='content-dots'><span class='dot dot_active'></span><span class='dot'></span><span class='dot'></span></div><div class='card_info_text'><h2 class='h2-cards text_tm1'>$title</h2><div class='fxaigpfwjcw'><h3 class='h3-cards text_tm1'>$room</h3><div class='card_info_rating'><i class='fas fa-star'></i><p>4.89 <span>(15)</span></p></div></div></div></div></div>",
                        'price' => "$price$ / Night",
                        'image-name' => 'popup',
                    ],
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$longitude, $latitude]
                    ]
                ];
            } 

            if ($this->preloadReturnMap) {
                $this->dispatchBrowserEvent('loadDataMapBoxOne', ['preLoadCoordinate' => $this->preLoadCoordinate, 'contentCoordinate' => $this->contentCoordinate]);
            }
        } else {
            return view('home.index');
        }


        return view('livewire.wishlists.wish');
    }

    public function removeListing($payload)
    {
        Wishlists::where(['user_id' => Auth::id(), 'name' => $this->name, 'listing_id' => $payload])->distinct('listing_id')->delete();
        $wish = Wishlists::where(['user_id' => Auth::id(), 'name' => $this->name])->get();
        
        if(count($wish) == 0){
            return redirect()->route('/');
        }

        $this->preLoadContent();

        $this->preloadReturnMap = true;
    }

    public function preLoadContent()
    {
        $this->category = RoomsProperty::where(function ($query) {
            if ($this->filterPlace != null)
                return $query->where('type', $this->filterPlace);
        })->pluck('name', 'code');

        $this->wishlists = Wishlists::where(['user_id' => Auth::id(), 'name' => $this->name])->distinct('listing_id')->pluck('listing_id')->toArray();
        
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
            ->whereNotIn('listings.status', ['in process'])
            ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
            ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->leftJoin('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
            ->where(function ($query) {
                if ($this->filter_categ != null)
                    return $query->where('listing_property_roomds.property_type', $this->filter_categ);

                if ($this->filterPlace != null)
                    return $query->where('listing_property_roomds.like_place', $this->filterPlace);
            })
            ->whereIn('listings.id_listings', $this->wishlists)
            ->where(function ($query) {
                if ($this->filterPrice != null) {
                    if ($this->filterPrice === '20')
                        return $query->where('listing_pricings.base_price', '<=', '20');

                    if ($this->filterPrice === '20-20')
                        return $query->where(
                            'listing_pricings.base_price',
                            '>=',
                            '20',
                            'listing_pricings.base_price',
                            '<=',
                            '80'
                        );

                    if ($this->filterPrice === '80')
                        return $query->where('listing_pricings.base_price', '>=', '80');
                }
            })
            ->get()->toArray();
        $this->countListing = count($this->contentListing);
    }

    public function buttonIncrease($payload)
    {
        if ($payload == 'adult') {
            ++$this->inputAdult;
        }

        if ($payload == 'children') {
            ++$this->inputKids;
        }

        if ($payload == 'infant') {
            ++$this->inputInfant;
        }

        if ($payload == 'pet') {
            ++$this->inputPets;
        }
    }


    public function buttonDecrease($payload)
    {
        if ($payload == 'adult' && $this->inputAdult > 0) {
            --$this->inputAdult;
        }

        if ($payload == 'children' && $this->inputKids > 0) {
            --$this->inputKids;
        }

        if ($payload == 'infant' && $this->inputInfant > 0) {
            --$this->inputInfant;
        }

        if ($payload == 'pet' && $this->inputPets > 0) {
            --$this->inputPets;
        }
    }


    public function reLoadRender()
    {
    }
}
