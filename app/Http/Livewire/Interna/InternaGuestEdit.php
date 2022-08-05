<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;

class InternaGuestEdit extends Component
{
    public $max_people;
    public $allow;
    public $pets_allowed;

    public function render()
    {
        return view('livewire.interna.interna-guest-edit');
    }
}
