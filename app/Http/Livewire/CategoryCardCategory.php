<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
class CategoryCardCategory extends Component
{
    public function render()
    {
        $category=Category::all();
        return view('livewire.category-card-category',compact('category'));
    }
}
