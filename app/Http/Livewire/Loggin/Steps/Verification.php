<?php

namespace App\Http\Livewire\Loggin\Steps;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Verification extends Component
{
    use LivewireAlert;
    
    public $content;

    public $inputOne = '';
    public $inputTwo = '';
    public $inputTree = '';
    public $inputFour = '';
    public $inputFive = '';
    public $inputSix = '';
    public $code_verifications = '';
    public $isError = false;

    public function render()
    {
        return view('livewire.loggin.steps.verification');
    }

    public function submitCodeVerification()
    {
        $this->code_verifications = $this->inputOne . $this->inputTwo . $this->inputTree . $this->inputFour . $this->inputFive . $this->inputSix;

        $validation = Validator::make([
           'code_verifications' => $this->code_verifications,
        ],[
            'code_verifications' => 'required|digits:6|exists:code_verifications,code',
        ]);

            if ($validation->fails()){
                $this->alert('warning', 'Enter code is invalid.');
                $validation->validate();
            }

        $payload = [
            'to' => 'loggInOut',
            'from' => 'verificationCode',
            'content' => $this->code_verifications
        ];  

        $this->emitUp('eventSteps', $payload);

    }

    public function moreOptions()
    {
        $payload = [
            'to' => 'moreOptions',
            'from' => 'verificationOptions'
        ];  

        $this->emitUp('eventSteps', $payload);
    }
}
