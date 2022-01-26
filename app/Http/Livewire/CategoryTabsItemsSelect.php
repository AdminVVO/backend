<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
class CategoryTabsItemsSelect extends Component
{
    public function render()
    {
        $category=Category::all();
        // $select=Select::all(); ejemplo de obtener datos para los selects de la vista.
        return view('livewire.category-tabs-items-select',compact('category'));
    }
}
