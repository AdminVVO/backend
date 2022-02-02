<?php

namespace App\Http\Livewire\Category;

use App\Models\CardCategory;
use Livewire\Component;

class Cardpool extends Component
{
    public function render()
    {
        $sites = CardCategory::all();
        return view('livewire.category.cardpool',compact('sites'));
    }
}
