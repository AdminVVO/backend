<?php

namespace App\Http\Livewire\Loggin\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class NeedHelps extends Component
{
    public $helpsInput = '';

    public function render()
    {
        return view('livewire.loggin.steps.need-helps');
    }

    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function submitHelp()
    {
        $validation = Validator::make([
           'helpsInput' => $this->helpsInput,
        ],[
            'helpsInput' => 'required|min:50|max:250',
        ]);

            if ($validation->fails())
                $validation->validate();

        $payload = [
            'to' => 'messageSend',
            'from' => 'needHelps',
            'content' => $this->helpsInput,
        ];

        $this->emitUp('eventSteps', $payload);
    }
}
