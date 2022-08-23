<?php

namespace App\Http\Livewire\Reservations;

use Livewire\Component;

class ReservationIndex extends Component
{
    public $tabs = '';
    public $reservation = [];

    public function render()
    {   
        return view('livewire.reservations.reservation-index');
    }

    public function mount()
    { 

        $this->tabs = 'Upcoming';
    }

    public function changeTabs( $payload )
    {
        $this->tabs = $payload;
    }
}
