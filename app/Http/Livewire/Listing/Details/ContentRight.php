<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listings;
use Livewire\Component;
use Auth;

class ContentRight extends Component
{
    public $listing;
    private $content = [];

    public function mount()
    {
        $query = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'status',
            'photos',
            'created_at',
        )->where([
            'user_id' => Auth::id()
        ])
        ->whereNotIn('status', ['in process']);

        $cloneQueryOne = clone $query;
            $queryIn = clone $cloneQueryOne->where('id_listings', $this->listing)->get();

        $cloneQueryTwo = clone $query;
            $queryNotIn = clone $cloneQueryTwo->where('id_listings', '!=', $this->listing)->get();

        $mergeQuery = $queryIn->merge($queryNotIn);

        foreach ($mergeQuery as $key => $value) {
            $mergeQuery[ $key ]['photos'] = $value['photos'][0];
        }

        $this->content = $mergeQuery;
    }

    public function render()
    {
        return view('livewire.listing.details.content-right', ['content' => $this->content]);
    }
}
