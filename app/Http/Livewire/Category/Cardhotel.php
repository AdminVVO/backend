<?php

namespace App\Http\Livewire\Category;

use App\Models\CardCategory;
use Livewire\Component;

class Cardhotel extends Component
{
    public function render()
    {
        $sites = CardCategory::all();
        return view('livewire.category.cardhotel',compact('sites'));
    }
}
