<?php

namespace App\Http\Livewire\Loggin\Steps;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Loggin extends Component
{
    public $logIn = false;
    public $sendInputEmail = '';
    public $sendInputPhone = '';

    public function render()
    {
        return view('livewire.loggin.steps.loggin');
    }
    
    public function changeState()
    {
        $this->sendInputEmail = '';
        $this->sendInputPhone = '';
        $this->logIn = !$this->logIn;
    }

    public function submitInput()
    {
        if ( $this->logIn ) {
            $validation = Validator::make([
               'sendInputEmail' => $this->sendInputEmail,
            ],[
                'sendInputEmail' => 'required|email',
            ]);
        }

        if ( !$this->logIn ) {
            $validation = Validator::make([
               'sendInputPhone' => $this->sendInputPhone,
            ],[
                'sendInputPhone' => 'required',
            ]);
        }

            if ($validation->fails())
                $validation->validate();

        if ( $this->logIn )
            $payload = [
                'to' => 'verification',
                'from' => 'loggin',
                'content' => [
                    'type' => 'email',
                    'recipients' => $this->sendInputEmail,
                ],
            ];        

        if ( !$this->logIn )
            $payload = [
                    'to' => 'verification',
                    'from' => 'loggin',
                    'content' => [
                        'type' => 'phone',
                        'recipients' => $this->sendInputPhone,
                    ],
                ];

        $this->emitUp('eventSteps', $payload);
    }
}



