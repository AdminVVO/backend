<?php

namespace App\Http\Livewire;

use App\Models\CardCategory;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CardCategoryHotel extends Component
{
    public function render()
    {
        $sites = CardCategory::all();
        return view('livewire.card-category-hotel',compact('sites'));
    }
}
