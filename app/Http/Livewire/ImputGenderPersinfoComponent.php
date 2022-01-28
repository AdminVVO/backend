<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ImputGenderPersinfoComponent extends Component
{
    public $gender;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('sex')->first();

        if ( $query )
            $this->inputEdit['sex'] = $query;

        return view('livewire.imput-gender-persinfo-component', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
        $this->gender = $this->inputEdit['sex'];
    }

    public function submit()
    {   
        $this->isLoad = true; 

        $validation = Validator::make([
           'gender' => $this->gender
        ],[
            'gender' => 'required|in:Female,Male'
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'sex'      => $this->gender
        ]);

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->gender = null;
        $this->isLoad = false; 
    }
}
