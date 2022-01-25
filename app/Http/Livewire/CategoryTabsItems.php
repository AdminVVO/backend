<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
class CategoryTabsItems extends Component
{
    public function render()
    {
        $category=Category::all();
        return view('livewire.category-tabs-items',compact('category'));
    }
}
