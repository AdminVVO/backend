<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryTabsItemsSelect extends Component
{
    public function render()
    {
        $category= DB::table('categories')->select('categories.*')->limit(4)->get();
        return view('livewire.category-tabs-items-select',compact('category'));
    }
}
