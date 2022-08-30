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

    protected $listeners = [
        'addListing' => 'addListing',
        'removeListing' => 'removeListing',
    ];

    public function render()
    {
        $this->wishlists = modelWishlists::where('user_id', Auth::id())->select('listing_id', 'name', 'avatar')->distinct('name')->get();

        return view('livewire.home.wishlists');
    }

    public function NewWishlists()
    {
        $this->steps = 'created';
    }

    public function addListing($payload)
    {
        $this->reset(['inputWishlists','steps','photo','listingId']);
        $this->listingId = $payload;

        $queryListing = Listings::where([
            'id_listings' => $this->listingId,
        ])->whereNotIn('status', ['in process'])->pluck('photos')->first();

        $this->photo = $queryListing[0];
    }

    public function removeListing($payload)
    {
        $queryListing = modelWishlists::where([
            'listing_id' => $payload,
            'user_id' => Auth::id(),
        ])->delete();

        $this->alert('success', 'Update has been successful!');
        $this->emit('reLoadRender');
    }

    public function addFavority($payload)
    {
        modelWishlists::create([
            'name'       => $payload,
            'avatar'     => $this->photo['name'],
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id(),
        ]);

        $this->reset(['inputWishlists','steps','photo','listingId']);
        $this->dispatchBrowserEvent('closedModalFavority');
        $this->alert('success', 'Update has been successful!');
        $this->emit('reLoadRender');
    }

    public function removeFavority($payload)
    {
        $deleted = modelWishlists::where('name', $payload)->pluck('id_wishlists')->toArray();
        modelWishlists::whereIn('id_wishlists', $deleted)->delete();

        $this->alert('success', 'Deleted has been successful!');
        $this->emit('reLoadRender');
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
            'avatar'     => $this->photo['name'],
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id(),
        ]);

        $this->reset(['inputWishlists','steps','photo','listingId']);
        $this->dispatchBrowserEvent('closedModalFavority');
        $this->alert('success', 'Update has been successful!');
        $this->emit('reLoadRender');
    }
}
