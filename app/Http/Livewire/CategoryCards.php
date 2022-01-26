<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CategoryCards extends Component
{
    public function render()
    {
        // accommodations
        $sites= DB::table('sites')->select('sites.*')->get(); 
        // ->limit(9)
        $accommodations= DB::table('accommodations')->select('accommodations.*')->limit(10)->get();
        return view('livewire.category-cards')->with([
            'sites' => $sites,
            'accommodations'=>$accommodations,
        ]);
;
    }
}
