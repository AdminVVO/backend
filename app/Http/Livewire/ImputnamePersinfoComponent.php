<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class ImputnamePersinfoComponent extends Component
{

    public $name, $last_name;
    public $classActive = false;
    public $isLoad = false;

    public function render()
    {
        return view('livewire.imputname-persinfo-component');
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive; 
    }

    public function submit()
    {   
        $this->isLoad = true; 

        $validation = Validator::make([
           'name'      => $this->name,
           'last_name' => $this->last_name,
        ],[
            'name'      => 'required|min:3',
            'last_name' => 'required|min:3'
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id' => 1/*Auth::id()*/,
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
