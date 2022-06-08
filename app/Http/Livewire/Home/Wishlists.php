<?php

namespace App\Http\Livewire\Home;

use App\Models\Listing\Listings;
use App\Models\Wishlists as modelWishlists;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Wishlists extends Component
{
    use LivewireAlert;

    public $steps = 'init';
    public $listingId;
    public $photo;
    public $inputWishlists;
    public $wishlists;
    public $section;

    protected $listeners = [
        'addListingIdTitle' => 'addListingIdTitle',
        'addListingIdFilter' => 'addListingIdFilter',
        'addListingIdPopular' => 'addListingIdPopular',
    ];

    public function render()
    {
        $this->wishlists = modelWishlists::where('user_id', Auth::id())->select('name', 'avatar')->distinct('name')->get();
        return view('livewire.home.wishlists');
    }

    public function NewWishlists()
    {
        $this->steps = 'created';
    }

    public function addListingInit()
    {
        $queryListing = Listings::where([
            'id_listings' => $this->listingId,
        ])->pluck('photos')->first();

        $this->photo = $queryListing[0];
    }

    public function addListingIdTitle($payload)
    {
        $this->reset(['inputWishlists','steps','photo','listingId','section']);
        $this->listingId = $payload;
        $this->section = 'title';

        $this->addListingInit();
    }

    public function addListingIdFilter($payload)
    {
        $this->reset(['inputWishlists','steps','photo','listingId','section']);
        $this->listingId = $payload;
        $this->section = 'filter';

        $this->addListingInit();
    }

    public function addListingIdPopular($payload)
    {
        $this->reset(['inputWishlists','steps','photo','listingId','section']);
        $this->listingId = $payload;
        $this->section = 'popular';

        $this->addListingInit();
    }

    public function addFavority($payload)
    {
        modelWishlists::create([
            'name'       => $payload,
            'avatar'     => $this->photo,
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id(),
        ]);
        $this->dispatchBrowserEvent('closedModalFavority');
        $this->alert('success', 'Update has been successful!');

        if ( $this->section == 'title' )
            return $this->emitTo('home.cards-title', 'reLoadRender');

        if ( $this->section == 'filter' )
            return $this->emitTo('home.cards-filters', 'reLoadRender');

        if ( $this->section == 'popular' )
            return $this->emitTo('home.cards-all', 'reLoadRender');
    }

    public function SubmitWishlists()
    {
        $this->resetValidation();    
        
        $validation = Validator::make([
           'inputWishlists' => $this->inputWishlists,
        ],[
            'inputWishlists' => 'required|max:50',
        ]);

            if ($validation->fails())
                $validation->validate();

        modelWishlists::create([
            'name'       => $this->inputWishlists,
            'avatar'     => $this->photo,
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id(),
        ]);
        $this->reset(['inputWishlists','steps','photo','listingId','section']);
        $this->dispatchBrowserEvent('closedModalFavority');
        $this->alert('success', 'Update has been successful!');

        if ( $this->section == 'title' )
            return $this->emitTo('home.cards-title', 'reLoadRender');

        if ( $this->section == 'filter' )
            return $this->emitTo('home.cards-filters', 'reLoadRender');

        if ( $this->section == 'popular' )
            return $this->emitTo('home.cards-all', 'reLoadRender');
    }
}
