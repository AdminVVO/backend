<?php

namespace App\Http\Livewire;

use App\Models\CardCategory;
use App\Models\Category;
use Livewire\Component;

class HomeCardFilter extends Component
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
        return view('livewire.home-card-filter', compact('sites', 'categorys'));
    }
    public function changeCategory($category)
    {
        $this->category = $category;
        $this->emit('reloadClassCSs');
    }
}
