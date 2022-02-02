<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Email extends Component
{
    public $email;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [
        'email' => ''
    ];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('email')->first();
               
        if ( $query )
            $this->inputEdit['email'] = $query;

        return view('livewire.account.personal.email', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
        $this->email = $this->inputEdit['email'];
    }

    public function submit()
    {   
        $this->isLoad = true; 

        $validation = Validator::make([
           'email' => $this->email,
        ],[
            'email' => 'required|email',
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'email' => $this->email,
        ]);

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->email = null;
        $this->isLoad = false; 
    }
}