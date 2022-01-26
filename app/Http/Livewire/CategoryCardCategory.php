<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryCardCategory extends Component
{
    public function render()
    {
        $category= DB::table('categories')->select('categories.*')->get();
        // ->limit(3)
        return view('livewire.category-card-category',compact('category'));
    }
}
