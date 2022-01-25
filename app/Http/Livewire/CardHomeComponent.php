<?php

namespace App\Http\Livewire;

use App\Models\Accommodation;
use Livewire\Component;

class CardHomeComponent extends Component
{
    public function render()
    {
        $Accommodation = Accommodation::all();
        return view('livewire.card-home-component', compact('Accommodation'));
    }
}
