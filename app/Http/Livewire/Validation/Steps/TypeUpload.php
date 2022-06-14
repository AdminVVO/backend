<?php

namespace App\Http\Livewire\Validation\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TypeUpload extends Component
{
    use LivewireAlert;
    
    public $typeUpload = '';

    public function render()
    {
        return view('livewire.validation.steps.type-upload');
    }

    public function submitTypeUpload()
    {
        $validation = Validator::make([
           'typeUpload' => $this->typeUpload,
        ],[
            'typeUpload' => 'required|in:device,browser',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select a valid option.');

        $payload = [
            'to' => 'typeDocument',
            'from' => 'typeUpload',
            'content' => $this->typeUpload,
        ];

        $this->emitUp('eventSteps', $payload);
    }
}
