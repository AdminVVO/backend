<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Cardslider extends Component
{
    public function render()
    {
        $Accommodation = [];
        return view('livewire.home.cardslider',compact('Accommodation'));
    }
}
