<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ImputEmailPersinfoComponent extends Component
{
    public $email;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->select('email')->first();
               
        if ( $query )
            $this->inputEdit['email'] = $query['email'];

        return view('livewire.imput-email-persinfo-component', compact('query'));
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