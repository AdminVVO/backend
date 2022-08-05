<?php

namespace App\Http\Livewire\Listing\BecomeHost\Includes;

use Livewire\Component;

class Location extends Component
{
    public $latitud;
    public $longitude;

    public function mount()
    {
        $this->longitude = $this->longitude == null ? 0 : $this->longitude;
        $this->latitud = $this->latitud == null ? 0 : $this->latitud;
    }

    public function render()
    {
        return view('livewire.listing.become-host.includes.location');
    }
}
