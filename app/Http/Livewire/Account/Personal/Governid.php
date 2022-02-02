<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Governid extends Component
{
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        return view('livewire.account.personal.governid');
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
    }

    public function submit()
    {   
        $this->isLoad = true; 

      

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->isLoad = false; 
    }
}
