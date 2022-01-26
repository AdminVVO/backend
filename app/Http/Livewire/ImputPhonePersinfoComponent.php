<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ImputPhonePersinfoComponent extends Component
{

    public $phone, $phoneEdit;
    public $classActive = false;
    public $isLoad = false;
    public $showInput = false;

    public function render()
    {
        $qphone = User::where([ 'id_user' => Auth::id() ])->select('phone')->get();
        $qphone = $qphone[0]['phone']; ## OPTIMIZAR LINEA... PT NO ME ACUERDO COMO RECIBIR EL ARRAY FINAL
            if ( empty( $qphone ) /*|| $phone->empty()*/ )
                $this->showInput = true;

        return view('livewire.imput-phone-persinfo-component', compact('qphone'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
    }

    public function submit()
    {   
        // dd($this->phone);
        $this->isLoad = true; 

        $validation = Validator::make([
           'phone' => $this->phone,
        ],[
            'phone' => 'required',
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }
            
        $query = User::find( Auth::id() )->select('phone')->get();
        $query = $query[0]['phone'];
        $query[] = $this->phone;
        
        if ( $this->phoneEdit === null) {
            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'phone' => $query,
            ]);
        }

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }

    public function editNumber($payload)
    {
        $this->phoneEdit = $payload;
        $this->phone = $payload;
        $this->addOtherNumber();
    }

    public function addOtherNumber()
    {
        $this->showInput = true;
    }


    private function resetInput()
    {
        $this->phone = null;
        $this->phoneEdit = null;
        $this->isLoad = false; 
        $this->showInput = false;
    }
}
