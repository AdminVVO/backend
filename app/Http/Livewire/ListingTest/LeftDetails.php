<?php

namespace App\Http\Livewire\ListingTest;

use App\Models\Listing\Listings;
use Livewire\Component;
use Auth;

class LeftDetails extends Component
{
    public $listingId;
    public $search = '';
    public $sortBy = 'ASC';
    public $content = [];

    protected $listeners = [
        'reloadDetails' => 'refresh'
    ];

    public function mount($listing)
    {
        $this->listingId = $listing;
    }

    public function render()
    {
        $this->loadListingDetails();
        return view('livewire.listing-test.left-details');
    }

    public function loadListingDetails()
    {
        $query = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'status',
            'photos',
            'created_at',
        )->where([
            'user_id' => Auth::id(),
        ])
        ->where(function ($query) {
            $query->where('title','like', '%' . $this->search . '%')
                  ->orWhere('internal_title','like', '%' . $this->search . '%');
        })
        ->orderBy('updated_at', $this->sortBy );

        $cloneQueryOne = clone $query;
            $queryIn = clone $cloneQueryOne->where('id_listings', $this->listingId)->get();

        $cloneQueryTwo = clone $query;
            $queryNotIn = clone $cloneQueryTwo->where('id_listings', '!=', $this->listingId)->get();

        $mergeQuery = $queryIn->merge($queryNotIn);

        foreach ($mergeQuery as $key => $value) {
            $mergeQuery[ $key ]['photos'] = $value['photos'][0];
        }

        $this->content = $mergeQuery;
    }

    public function sortBy()
    {
        if ( $this->sortBy === 'ASC' )
            return $this->sortBy = 'DESC';

        if ( $this->sortBy === 'DESC' )
            return $this->sortBy = 'ASC';
    }
}
