<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;

class Congratulations extends Component
{
    public $url;

    public function render()
    {
        return view('livewire.listing.steps.congratulations');
    }
}
