<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;

class InternaFormReserve extends Component
{
    public $listingId;
    
    public function render()
    {
        return view('livewire.interna.interna-form-reserve');
    }
}
