<?php

namespace App\Http\Livewire\Validation\Steps;

use Livewire\Component;

class FinishValidation extends Component
{
    public $phone;
    public $user_id;

    public function render()
    {
        return view('livewire.validation.steps.finish-validation', ['phone' => $this->phone, 'user_id' => $this->user_id ]);
    }
}
