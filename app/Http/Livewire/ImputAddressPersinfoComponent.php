<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class ImputAddressPersinfoComponent extends Component
{

    public $country, $street_address, $suite, $city, $state, $zip_code;
    public $classActive = false;
    public $isLoad = false;
    public $inputEdit = [];

    public function render()
    {
        $query = User::where(['id_user' => 1])->select('country', 'street_address', 'suite', 'city', 'state', 'zip_code')->first();
        
        $this->inputEdit['country']        = $query['country'];
        $this->inputEdit['street_address'] = $query['street_address'];
        $this->inputEdit['suite']          = $query['suite'];
        $this->inputEdit['city']           = $query['city'];
        $this->inputEdit['state']          = $query['state'];
        $this->inputEdit['zip_code']       = $query['zip_code'];

        return view('livewire.imput-address-persinfo-component', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
        $this->resetValidation();
        $this->resetInput();
        $this->country        = $this->inputEdit['country'];
        $this->street_address = $this->inputEdit['street_address'];
        $this->suite          = $this->inputEdit['suite'];
        $this->city           = $this->inputEdit['city'];
        $this->state          = $this->inputEdit['state'];
        $this->zip_code       = $this->inputEdit['zip_code'];
    }

    public function submit()
    {   
        $this->isLoad = true;

        $validation = Validator::make([
           'country'        => $this->country,
           'street_address' => $this->street_address,
           'suite'          => $this->suite,
           'city'           => $this->city,
           'state'          => $this->state,
           'zip_code'       => $this->zip_code,
        ],[
            'country'        => 'not_in:0',
            'street_address' => 'required',
            'suite'          => 'required',
            'city'           => 'required',
            'state'          => 'required',
            'zip_code'       => 'required',
        ]);

            if ($validation->fails()) {
                $this->isLoad = false; 
                $validation->validate();
            }

        User::where([
            'id_user' => 1/*Auth::id()*/,
        ])->update([
            'country'        => $this->country,
            'street_address' => $this->street_address,
            'suite'          => $this->suite,
            'city'           => $this->city,
            'state'          => $this->state,
            'zip_code'       => $this->zip_code
        ]);

        $this->resetInput();
        $this->classActive = !$this->classActive; 
    }
    private function resetInput()
    {
        $this->country = null;
        $this->street_address = null;
        $this->suite = null;
        $this->city = null;
        $this->state = null;
        $this->zip_code = null;
        $this->isLoad = false; 
    }
}