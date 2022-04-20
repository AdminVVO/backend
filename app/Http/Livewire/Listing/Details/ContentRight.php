<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listings;
use Livewire\Component;
use Auth;

class ContentRight extends Component
{
    public $listing;
    private $content = [];
    public $search;
    public $sortBy = 'ASC';

    public $listeners = [
        'reloadQuery',
    ];

    public function mount()
    {
    }

    public function render()
    {
        $this->initFuntionsStar();
        return view('livewire.listing.details.content-right', ['content' => $this->content]);
    }
        
    public function initFuntionsStar()
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
        ->whereNotIn('status', ['in process'] )
        ->orderBy('updated_at', $this->sortBy );

            if ( $this->search != '' ) {
                $query = $query->where('title','like', '%' . $this->search . '%');
                $query = $query->Orwhere('internal_title','like', '%' . $this->search . '%');
            }

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

    public function sortBy()
    {
        if ( $this->sortBy === 'ASC' )
            return $this->sortBy = 'DESC';

        if ( $this->sortBy === 'DESC' )
            return $this->sortBy = 'ASC';
    }

    public function reloadQuery()
    {
        $this->reset(['search','sortBy','content']);
        $this->initFuntionsStar();
    }
}
