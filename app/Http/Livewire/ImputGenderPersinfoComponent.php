<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class ImputGenderPersinfoComponent extends Component
{

    public $gender;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => 1])->select('sex')->first();

        $arraySelect = collect(['Male', 'Female']);

        $this->inputEdit['sex'] = $query;

        return view('livewire.imput-gender-persinfo-component', compact('query', 'arraySelect'));
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
           'gender'      => $this->gender
        ],[
            'gender'      => 'required|in:Female,Male'
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id_user' => 1/*Auth::id()*/,
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
