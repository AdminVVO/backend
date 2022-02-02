<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\EmergencyUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Emergency extends Component
{
    public $name = null;
    public $relationship = null;
    public $language = null;
    public $email = null;
    public $country = null;
    public $phone = null;
    public $phone_country = null;
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

    protected $listeners = ['submitphoneEmergency' => 'submitphoneEmergency'];

    public function render()
    {
        $query = EmergencyUsers::where(['user_id' => Auth::id()])->select('name', 'relationship', 'language', 'email', 'country', 'phone')->first();
        
        if ( $query ) {
            $this->inputEdit['name']         = $query['name'];
            $this->inputEdit['relationship'] = $query['relationship'];
            $this->inputEdit['language']     = $query['language'];
            $this->inputEdit['email']        = $query['email'];
            $this->inputEdit['country']      = $query['country'];
            $this->inputEdit['phone']        = $query['phone'];
        }

        return view('livewire.account.personal.emergency', compact('query'));
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

    public function submitphoneEmergency($payload)
    {   
        $this->isLoad = true; 
        $this->phone = $payload;

        $validation = Validator::make([
           'name'         => $this->name,
           'relationship' => $this->relationship,
           'language'     => $this->language,
           'email'        => $this->email,
           'country'      => $this->country,
           'phone'        => $this->phone
        ],[
            'name'         => 'required|min:3|regex:/^[a-zA-Z\s]+$/u',
            'relationship' => 'required',
            'language'     => 'required|in:ES,EN',
            'email'        => 'required|email',
            'country'      => 'required|in:NY,CA',
            'phone'        => 'required|min:6'
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        EmergencyUsers::updateOrCreate(
            [ 'user_id' => Auth::id() ],
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
