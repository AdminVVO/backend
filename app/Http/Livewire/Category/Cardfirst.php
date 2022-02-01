<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Cardfirst extends Component
{
    public function render()
    {
        $category= DB::table('categories')->select('categories.*')->limit(3)->get();
        return view('livewire.category.cardfirst',compact('category'));
    }
}
