<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\CardCategory;
use App\Models\Category;

class CategoryCards extends Component
{
    public $category = '';
    public $sites = [];
    public function render()
    {    
        if(!empty($this->category)){   
        $this->sites = CardCategory::Where('card_categories.category_id', '=',$this->category)->get();
        }else{
            $this->sites = DB::table('card_categories')->select('card_categories.*')->limit(10)->get();
        }
        $sites=$this->sites;
        $categorys = DB::table('categories')->select('categories.*')->limit(3)->get();
        return view('livewire.category-cards')->with([
            'sites' => $sites,
            'categorys' => $categorys,
        ]);;
    }
    public function changeCategory($category){
        $this->category = $category;
    }
}
