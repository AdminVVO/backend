<?php

namespace App\Http\Livewire\Reservations\Tabs\Modals;

use Livewire\Component;

class Options extends Component
{
    public $phone;

    protected $listeners = [
        'refreshOption' => 'refresh'
    ];
    
    public function refresh($data) {
        $this->phone = $data;
    }   

    public function render()
    {
        return view('livewire.reservations.tabs.modals.options');
    }
}
