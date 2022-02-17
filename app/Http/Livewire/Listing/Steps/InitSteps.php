<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;

class InitSteps extends Component
{
    public function render()
    {
        return view('livewire.listing.steps.init-steps');
    }

    public function next()
    {
        $payload = [
            'to' => 'host',
            'from' => 'letGo',
            'img' => 'host',
        ];
        
        $this->emitUp('next', $payload);
    }
}
