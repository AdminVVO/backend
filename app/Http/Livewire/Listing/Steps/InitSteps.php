<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;

class InitSteps extends Component
{
    public function render()
    {
        return view('livewire.listing.steps.init-steps');
    }
 
    public function letGo()
    {
        $this->emitUp('letGo');
    }
}
