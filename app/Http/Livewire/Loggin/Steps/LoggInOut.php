<?php

namespace App\Http\Livewire\Loggin\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class LoggInOut extends Component
{
    public $content;

    public $name = '';
    public $last_name = '';
    public $gender = '';
    public $dateBirth = '';
    public $email = '';
    public $phone = '';
    public $promotion = false;

    public function mount()
    {
        $this->content['type'] == 'email' ? $this->email = $this->content['recipients'] : $this->phone = $this->content['recipients'];
    }

    public function render()
    {
        return view('livewire.loggin.steps.logg-in-out');
    }

    public function submitLogIn()
    {
        $yearInQuestion = date("Y-m-d",strtotime( date("Y-m-d") . "- 18 year"));
        $validation = Validator::make([
           'name'      => $this->name,
           'last_name' => $this->last_name,
           'gender'    => $this->gender,
           'dateBirth' => $this->dateBirth,
           'email'     => $this->email,
           'phone'     => $this->phone
        ],[
            'name'      => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'gender'    => 'required|in:Male,Female',
            'dateBirth' => 'required|date|before:' . $yearInQuestion,
            'email'     => 'required|email',
            'phone'     => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();

        $payload = [
            'from' => 'loggInOut',
            'content' => [
                'name'      => $this->name,
                'last_name' => $this->last_name,
                'gender'    => $this->gender,
                'dateBirth' => $this->dateBirth,
                'email'     => $this->email,
                'phone'     => $this->phone,
                'promotion' => $this->promotion,
            ]
        ];  

        $this->emitUp('eventSteps', $payload);

    }
}
