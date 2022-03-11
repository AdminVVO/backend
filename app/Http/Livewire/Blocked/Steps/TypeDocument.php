<?php

namespace App\Http\Livewire\Blocked\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TypeDocument extends Component
{
    use LivewireAlert;
    
    public $country = '';
    public $document = '';
    public $content = [];

    public function render()
    {
        return view('livewire.blocked.steps.type-document');
    }

    public function submitTypeDocument()
    {
        $validation = Validator::make([
           'country' => $this->country,
           'document' => $this->document,
        ],[
            'country' => 'required|in:US',
            'document' => "required|in:Driver's License,Passport,Identity Card",
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must complete the form correctly.');

        $this->content['country'] = $this->country;
        $this->content['document'] = $this->document;

        $payload = [
            'to' => 'uploadFile',
            'from' => 'typeDocument',
            'content' => $this->content,
        ];

        $this->emitUp('eventSteps', $payload);
    }
}
