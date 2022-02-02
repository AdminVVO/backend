<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Name extends Component
{

    public $name = null;
    public $last_name = null;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [
        'name' => '',
        'last_name' => '',
    ];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->select('name', 'last_name')->first();
        
        if ( $query ) {
            $this->inputEdit['name'] = $query['name'];
            $this->inputEdit['last_name'] = $query['last_name'];
        }

        return view('livewire.account.personal.name', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
        $this->name = $this->inputEdit['name'];
        $this->last_name = $this->inputEdit['last_name'];
    }

    public function submit()
    {   
        $this->isLoad = true; 

        $validation = Validator::make([
           'name'      => $this->name,
           'last_name' => $this->last_name,
        ],[
            'name'      => 'required|min:3|regex:/^[a-zA-Z\s]+$/u',
            'last_name' => 'required|min:3|regex:/^[a-zA-Z\s]+$/u'
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
                'id_user' => Auth::id(),
        ])->update([
            'name'      => $this->name,
            'last_name' => $this->last_name,
        ]);

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->name = null;
        $this->last_name = null;
        $this->isLoad = false; 
    }
}
