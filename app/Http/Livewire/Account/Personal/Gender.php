<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Gender extends Component
{
    use LivewireAlert;

    public $gender = null;
    public $classActive = false;
    public $inputEdit = [
        'sex' => ''
    ];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('sex')->first();

        if ( $query )
            $this->inputEdit['sex'] = $query;

        return view('livewire.account.personal.gender', compact('query'));
    }

    public function statusUpdate()
    {
        $this->resetValidation();
        $this->resetInput();
        $this->gender = $this->inputEdit['sex'];
    }

    public function submitGender()
    {   
        $validation = Validator::make([
           'gender' => $this->gender
        ],[
            'gender' => 'required|in:Female,Male'
        ]);

            if ($validation->fails())
                $validation->validate();

        try {

            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'sex'      => $this->gender
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
        $this->gender = null;
    }
}
