<?php

namespace App\Http\Livewire\Blocked\Steps;

use Livewire\Component;

class Init extends Component
{
    public function render()
    {
        return view('livewire.blocked.steps.init');
    }

    public function next()
    {
        $payload = [
                'to' => 'typeUpload',
                'from' => 'init'
            ];

        $this->emitUp('eventSteps', $payload);
    }
}
