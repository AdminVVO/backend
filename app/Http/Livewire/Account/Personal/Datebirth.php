<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Datebirth extends Component
{
    public $datebirth = null;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [
        'date_birth' => ''
    ];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('date_birth')->first();

        if ( $query )
            $this->inputEdit['date_birth'] = Carbon::parse( $query, 'UTC')->format('Y-m-d');

        return view('livewire.account.personal.datebirth');
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();

            if ( isset( $this->inputEdit['date_birth'] ) )
                $this->datebirth = Carbon::parse( $this->inputEdit['date_birth'], 'UTC')->format('Y-m-d');
    }

    public function submit()
    {   
        $this->isLoad = true; 
        
        $yearInQuestion = date("Y-m-d",strtotime( date("Y-m-d") . "- 18 year"));

        $validation = Validator::make([
           'datebirth' => $this->datebirth,
        ],[
            'datebirth' => 'required|date|before:' . $yearInQuestion,
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'date_birth' => Carbon::parse( $this->datebirth, 'UTC')->format('Y-m-d')
        ]);

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->datebirth = null;
        $this->isLoad = false; 
    }
}
