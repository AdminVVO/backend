<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class ImputNamePersinfoComponent extends Component
{

    public $name, $last_name;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => 1])->select('name', 'last_name')->first();
        
        $this->inputEdit['name'] = $query['name'];
        $this->inputEdit['last_name'] = $query['last_name'];

        return view('livewire.imput-name-persinfo-component', compact('query'));
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
            'name'      => 'required|min:3',
            'last_name' => 'required|min:3'
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id_user' => 1/*Auth::id()*/,
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
