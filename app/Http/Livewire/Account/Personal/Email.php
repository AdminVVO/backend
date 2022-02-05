<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Email extends Component
{
    use LivewireAlert;

    public $email;
    public $classActive = false;
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
        $this->resetValidation();
        $this->resetInput();
        $this->email = $this->inputEdit['email'];
    }

    public function submitEmail()
    {   
        $validation = Validator::make([
           'email' => $this->email,
        ],[
            'email' => 'required|email',
        ]);

            if ($validation->fails())
                $validation->validate();

        try {
            
            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'email' => $this->email,
            ]);

            $this->resetInput();
            $this->alert('success', 'Update has been successful!');
            
        } catch (Exception $e) {

            $this->resetInput();
            $this->alert('error', 'Update has failed!');

        }
    }

    private function resetInput()
    {
        $this->classActive = !$this->classActive;
        $this->email = null;
    }
}