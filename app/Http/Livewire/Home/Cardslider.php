<?php

namespace App\Http\Livewire\Home;

use App\Models\Accommodation;
use Livewire\Component;

class Cardslider extends Component
{
    public function render()
    {
        $Accommodation = Accommodation::all();
        return view('livewire.home.cardslider',compact('Accommodation'));
    }
}
