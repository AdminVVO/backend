<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ImputDatebirthPersinfoComponent extends Component
{

    public $datebirth;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->select('date_birth')->first();

        if ( $query )
            $this->inputEdit['date_birth'] = $query['date_birth'];

        return view('livewire.imput-datebirth-persinfo-component', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
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
            'date_birth' => $this->datebirth,
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
