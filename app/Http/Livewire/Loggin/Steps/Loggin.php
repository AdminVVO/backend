<?php

namespace App\Http\Livewire\Loggin\Steps;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Loggin extends Component
{
    public $logIn = false;
    public $sendInputEmail = '';
    public $sendInputPhone = '';
    public $phone = '';

    public $listeners = [
        'submitInputPhone',
    ];

    public function render()
    {
        return view('livewire.loggin.steps.loggin');
    }
    
    public function changeState()
    {
        $this->sendInputEmail = '';
        $this->sendInputPhone = '';
        $this->logIn = !$this->logIn;
            if ( $this->logIn === false ) {
                $this->phone = '';
                $this->dispatchBrowserEvent('telDOMChanged');
            }
    }

    public function submitInputEmail()
    {
        $validation = Validator::make([
           'sendInputEmail' => $this->sendInputEmail,
        ],[
            'sendInputEmail' => 'required|email',
        ]);

            if ($validation->fails())
                $validation->validate();

        $payload = [
            'to' => 'verification',
            'from' => 'loggin',
            'content' => [
                'type' => 'email',
                'recipients' => $this->sendInputEmail,
            ],
        ];        

        $this->emitUp('eventSteps', $payload);
    }

    public function submitInputPhone($payload)
    {
        $validation = Validator::make([
           'sendInputPhone' => $payload,
        ],[
            'sendInputPhone' => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();

        $payload = [
                'to' => 'verification',
                'from' => 'loggin',
                'content' => [
                    'type' => 'phone',
                    'recipients' => $payload,
                ],
            ];

        $this->emitUp('eventSteps', $payload);
    }
}



