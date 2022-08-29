<?php

namespace App\Http\Livewire\Trips;

use Livewire\Component;

class Steps extends Component
{
    public $stepBar = 'upcoming';

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {

    } 

    public function render()
    {
        return view('livewire.trips.steps');
    }

    public function changeBars($payload)
    {
        if ( $payload === 'past' )
            $this->stepBar = 'past';
        
        if ( $payload === 'canceled' )
            $this->stepBar = 'canceled';
        
        if ( $payload === 'upcoming' )
            $this->stepBar = 'upcoming';
        
    }
}
