<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CategoryCards extends Component
{
    public function render()
    {
        // accommodations
        $sites9= DB::table('sites')->select('sites.*')->limit(9)->get();
        $sites2= DB::table('sites')->select('sites.*')->limit(9)->get();
        $accommodations= DB::table('accommodations')->select('sites.*')->limit(10)->get();
        $sites8piscina= DB::table('sites')->select('sites.*')->limit(8)->get();
        $sites2piscina= DB::table('sites')->select('sites.*')->limit(2)->get();
        return view('livewire.category-cards')->with([
            'sites9' => $sites9,
            'sites2' => $sites2,
            'accommodations'=>$accommodations,
            'sites8piscina'=>$sites8piscina,
            'sites2piscina'=> $sites2piscina,
        ]);
;
    }
}
