<?php

namespace App\Http\Livewire;

use App\Models\CardCategory;
use Livewire\Component;

class HomeCardMostPopular extends Component
{
    public function render()
    {
        $sites = CardCategory::all();
        return view('livewire.home-card-most-popular',compact('sites'));
    }
}
