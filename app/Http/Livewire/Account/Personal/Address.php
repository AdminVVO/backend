<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\Address as AddressModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Address extends Component
{
    use LivewireAlert;
    
    public $country = null;
    public $street_address = null;
    public $suite = null;
    public $city = null;
    public $state = null;
    public $zip_code = null;
    public $classActive = false;
    public $inputEdit = [
        'country'        => '',
        'street_address' => '',
        'suite'          => '',
        'city'           => '',
        'state'          => '',
        'zip_code'       => ''
    ];

    public function render()
    {
        $query = AddressModel::where(['user_id' => Auth::id() ])->select('country', 'street_address', 'suite', 'city', 'state', 'zip_code')->first();
     
        if ( $query ){
            $this->inputEdit['country']        = $query['country'];
            $this->inputEdit['street_address'] = $query['street_address'];
            $this->inputEdit['suite']          = $query['suite'];
            $this->inputEdit['city']           = $query['city'];
            $this->inputEdit['state']          = $query['state'];
            $this->inputEdit['zip_code']       = $query['zip_code'];
        }

        return view('livewire.account.personal.address', compact('query'));
    }

    public function statusUpdate()
    {
        $this->resetValidation();
        $this->resetInput();
        $this->country        = $this->inputEdit['country'];
        $this->street_address = $this->inputEdit['street_address'];
        $this->suite          = $this->inputEdit['suite'];
        $this->city           = $this->inputEdit['city'];
        $this->state          = $this->inputEdit['state'];
        $this->zip_code       = $this->inputEdit['zip_code'];
    }

    public function submitAddress()
    {   
        $validation = Validator::make([
           'country'        => $this->country,
           'street_address' => $this->street_address,
           'city'           => $this->city,
           'state'          => $this->state,
           'zip_code'       => $this->zip_code,
        ],[
            'country'        => 'in:US,PR',
            'street_address' => 'required',
            'city'           => 'required',
            'state'          => 'required',
            'zip_code'       => 'regex:/^[0-9]+$/',
        ]);

            if ($validation->fails())
                $validation->validate();

        try {
            
            AddressModel::updateOrCreate(
                [ 'user_id' => Auth::id() ],
                [
                    'country'        => $this->country,
                    'street_address' => $this->street_address,
                    'suite'          => $this->suite,
                    'city'           => $this->city,
                    'state'          => $this->state,
                    'zip_code'       => $this->zip_code
                ]
            );

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
        $this->country = null;
        $this->street_address = null;
        $this->suite = null;
        $this->city = null;
        $this->state = null;
        $this->zip_code = null;
    }
}