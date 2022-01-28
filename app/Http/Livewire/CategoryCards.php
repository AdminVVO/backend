<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\CardCategory;
use App\Models\Category;

class CategoryCards extends Component
{
    public $category = '';
    public $sites;
    public function updatingCategory()
    {
        $this->resetPage();
    }
    public function render()
    {

        if (!empty($this->category)) {
            $this->sites = CardCategory::Where('card_categories.category_id', '=', $this->category)->get();
        } else {
            $this->sites = CardCategory::all();
        }

        $sites = $this->sites;
        $categorys = Category::all();
        return view('livewire.category-cards', compact('sites', 'categorys'));
    }
    public function changeCategory($category)
    {
        $this->category = $category;
        $this->emit('reloadClassCSs');
        $this->emit('reloadJs');
    }
}
