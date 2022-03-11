<?php

namespace App\Http\Livewire\Loggin\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MoreOptions extends Component
{
    use LivewireAlert;
    
    public $content;

    public $resendInput;

    public function mount()
    {
        $this->content['type'] === 'email' ? $this->resendInput = 'email' : $this->resendInput = 'message';
    }

    public function render()
    {
        return view('livewire.loggin.steps.more-options');
    }

    public function needHelps()
    {
        $payload = [
            'to' => 'needHelps',
            'from' => 'moreOptionsHelps'
        ];  

        $this->emitUp('eventSteps', $payload);
    }

    public function submitResendCode()
    {        
        $validation = Validator::make([
           'resendInput' => $this->resendInput,
        ],[
            'resendInput' => 'required|in:email,message,call',
        ]);

            if ($validation->fails())
                $this->alert('warning', 'You must select a valid option.');

        $payload = [
            'to' => 'verification',
            'from' => 'moreOptions',
            'content' => $this->resendInput
        ];  

        $this->emitUp('eventSteps', $payload);
    }
}
