<?php

namespace App\Http\Livewire;

use App\Models\EmergencyUsers;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ImputEmergencyPersinfoComponent extends Component
{

    public $name, $last_name;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [
        'name' => '',
        'relationship' => '',
        'language' => '',
        'email' => '',
        'country' => '',
        'phone' => '',
    ];

    public function render()
    {
        $query = EmergencyUsers::where(['user_id' => 1])->select('name', 'relationship', 'language', 'email', 'country', 'phone')->first();
        
        if ( $query ) {
            $this->inputEdit['name']         = $query['name'];
            $this->inputEdit['relationship'] = $query['relationship'];
            $this->inputEdit['language']     = $query['language'];
            $this->inputEdit['email']        = $query['email'];
            $this->inputEdit['country']      = $query['country'];
            $this->inputEdit['phone']        = $query['phone'];
        }

        // dd($query);
        return view('livewire.imput-emergency-persinfo-component', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
        $this->name         = $this->inputEdit['name'];
        $this->relationship = $this->inputEdit['relationship'];
        $this->language     = $this->inputEdit['language'];
        $this->email        = $this->inputEdit['email'];
        $this->country      = $this->inputEdit['country'];
        $this->phone        = $this->inputEdit['phone'];
    }

    public function submit()
    {   
        $this->isLoad = true; 

        $validation = Validator::make([
           'name'         => $this->name,
           'relationship' => $this->relationship,
           'language'     => $this->language,
           'email'        => $this->email,
           'country'      => $this->country,
           'phone'        => $this->phone,
        ],[
            'name'         => 'required|min:3',
            'relationship' => 'required',
            'language'     => 'not_in:0',
            'email'        => 'required|email',
            'country'      => 'not_in:0',
            'phone'        => 'required',
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        EmergencyUsers::updateOrCreate(
            [ 'user_id' => 1/*Auth::id()*/, ],
            [
               'name'         => $this->name,
               'relationship' => $this->relationship,
               'language'     => $this->language,
               'email'        => $this->email,
               'country'      => $this->country,
               'phone'        => $this->phone
            ]
        );

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->name = null;
        $this->relationship = null;
        $this->language = null;
        $this->email = null;
        $this->country = null;
        $this->phone = null;
        $this->isLoad = false; 
    }
}
