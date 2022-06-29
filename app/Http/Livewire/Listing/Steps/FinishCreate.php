<?php

namespace App\Http\Livewire\Listing\Steps;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FinishCreate extends Component
{
    use LivewireAlert;
    
    public $pending = [];

    public function mount()
    {
        $this->pending = Listings::select(
            'listings.id_listings as listing',
            'listing_property_roomds.like_place',
            'listings.photos',
            'listings.created_at'
        )->where([
            'listings.status' => 'in process',
            'listings.user_id' => Auth::id()
        ])
        ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        ->whereNotIn('status', ['in process'])
        ->get();
    }

    public function render()
    {
        return view('livewire.listing.steps.finish-create');
    }

    public function next()
    {
        $payload = [
            'to' => 'letGo',
            'from' => 'finish',
        ];
        
        $this->emitUp('next', $payload);
    }

    public function continueListing($payload)
    {
        $this->emitUp('continueCreate', $payload);
    }
}
