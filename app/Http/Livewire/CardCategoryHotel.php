<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CardCategoryHotel extends Component
{
    public function render()
    {
        $sites = DB::table('card_categories')->select('card_categories.*')->limit(10)->get();
        return view('livewire.card-category-hotel',compact('sites'));
    }
}
