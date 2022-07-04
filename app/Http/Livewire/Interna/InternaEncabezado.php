<?php

namespace App\Http\Livewire\Interna;

use App\Models\Wishlists;
use Livewire\Component;
use Auth;

class InternaEncabezado extends Component
{
    public $wishlists;
    public $listingId;

    protected $listeners = [
        'reLoadRender' => 'reLoadRender'
    ];

    public function render()
    {
        $this->wishlists = Wishlists::where('user_id', Auth::id())->distinct('listing_id')->pluck('listing_id')->toArray();
        return view('livewire.interna.interna-encabezado');
    }

    public function reLoadRender(){ }
}
