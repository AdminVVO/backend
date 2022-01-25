<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CategoryCards extends Component
{
    public function render()
    {
        $sites= DB::table('sites')->select('sites.*')->limit(9)->get();
        return view('livewire.category-cards',compact('sites'));
    }
}
