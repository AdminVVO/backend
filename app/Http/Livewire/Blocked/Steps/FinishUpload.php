<?php

namespace App\Http\Livewire\Blocked\Steps;

use Livewire\Component;

class FinishUpload extends Component
{
    public $reference;

    public function render()
    {
        return view('livewire.blocked.steps.finish-upload');
    }
}
