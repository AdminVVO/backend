<?php

namespace App\Http\Livewire\Home;

use App\Models\CardCategory;
use Livewire\Component;

class Cardmostpopular extends Component
{
    public function render()
    {
        $sites = CardCategory::all();
        return view('livewire.home.cardmostpopular',compact('sites'));
    }
}
