<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Livewire\Component;

class ImputPhonePersinfoComponent extends Component
{

    public $phone, $phoneEdit, $kiki, $phone_country;
    public $classActive = false;
    public $isLoad = false;
    public $showInput = false;

    protected $listeners = ['submitEvent' => 'submitEvent'];

    public function render()
    {
        $qphone = User::where([ 'id_user' => Auth::id() ])->select('phone', 'other_phone')->first();
        
        // dd($qphone);

        if ( !$qphone )
            $this->showInput = true;

        return view('livewire.imput-phone-persinfo-component', compact('qphone'));
    }

    public function statusUpdate()
    {
        $this->resetValidation();
        $this->resetInput();
    }

    public function submitEvent($payload)
    {   
        $this->isLoad = true; 

        $validation = Validator::make([
           'phone' => $payload,
        ],[
            'phone' => 'required|min:6',
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

            dd('ss');
            
        $query = User::where([ 'id_user' => Auth::id() ])->select('phone', 'other_phone')->first();

        if ( $query['phone'] == $this->phone || $query['phone'] == $this->phoneEdit ){
            $this->resetInput();
            return;
        }
        
        // $other_phone = collect( $query['other_phone'] )->filter(function ($e) {
        //     return $e != $this->phoneEdit;
        // });

        // $other_phone->push($this->phone);

        if ( $this->phoneEdit === null ) {

            if ( $query['phone'] == null ) {
                User::where([
                    'id_user' => Auth::id(),
                ])->update([
                    'phone' => $this->phone
                ]);
            }else{
                User::where([
                    'id_user' => Auth::id(),
                ])->update([
                    'other_phone' => [$this->phone]
                ]);
            }
        }else{

            if ( $query['phone'] == $this->phoneEdit ) {
                User::where([
                    'id_user' => Auth::id(),
                ])->update([
                    'phone' => $this->phone
                ]);
            }else{
                User::where([
                    'id_user' => Auth::id(),
                ])->update([
                    'other_phone' => [$this->phone]
                ]);
            }
        }

        $this->resetInput();
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
        $this->classActive = !$this->classActive; 
        $this->phone = null;
        $this->phoneEdit = null;
        $this->isLoad = false; 
        $this->showInput = false;
    }
}
