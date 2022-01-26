<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class ImputEmailPersinfoComponent extends Component
{
    public $email;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => 1])->select('email')->first();
        
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
            'id_user' => 1/*Auth::id()*/,
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