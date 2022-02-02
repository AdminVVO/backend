<?php

namespace App\Http\Livewire\Account\Payments\Content;

use App\Models\Taxes as TaxeModel;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Taxes extends Component
{
    public $showModal = false;
    public $name = null;
    public $id_ein = null;
    public $country = null;
    public $address_1 = null;
    public $address_2 = null;
    public $zip_code = null;
    public $city = null;
    public $region = null;
    public $editInputs = [];
    public $editInput = null;

    public function render()
    {
        $query = TaxeModel::where(['user_id' => Auth::id() ])->orderBy('default', 'DESC')->get();

        foreach ($query as $key => $value) {
            $this->editInputs[ $key ]['name']      = $value['name'];
            $this->editInputs[ $key ]['id_ein']    = $value['id_ein'];
            $this->editInputs[ $key ]['country']   = $value['country'];
            $this->editInputs[ $key ]['address_1'] = $value['address_1'];
            $this->editInputs[ $key ]['address_2'] = $value['address_2'];
            $this->editInputs[ $key ]['zip_code']  = $value['zip_code'];
            $this->editInputs[ $key ]['city']      = $value['city'];
            $this->editInputs[ $key ]['region']    = $value['region'];
        }

        return view('livewire.account.payments.content.taxes', compact('query'));
    }

    public function submit()
    {
        $validation = Validator::make([
           'name'      => $this->name,
           'id_ein'    => $this->id_ein,
           'address_1' => $this->address_1,
           'address_2' => $this->address_2,
           'zip_code'  => $this->zip_code,
           'city'      => $this->city,
           'country'   => $this->country,
           'region'    => $this->region,
        ],[
           'name'      => 'required',
           'id_ein'    => 'required',
           'address_1' => 'required',
           'address_2' => 'required',
           'zip_code'  => 'required|regex:/^[0-9]+$/',
           'city'      => 'required',
           'region'    => 'required',
           'country'   => 'in:US,VE',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        $taxes = TaxeModel::where(['user_id' => Auth::id() ])->get();

        TaxeModel::create([
            'user_id'   => Auth::id(),
            'name'      => $this->name,
            'id_ein'    => $this->id_ein,
            'address_1' => $this->address_1,
            'address_2' => $this->address_2,
            'zip_code'  => $this->zip_code,
            'city'      => $this->city,
            'region'    => $this->region,
            'country'   => $this->country,
            'default'   => count( $taxes ) === 0 ? true : false,
        ]);

        $this->resetVal();
    }

    public function showModal()
    {
        $this->resetVal();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->resetVal();
    }
    
    public function resetVal()
    {
        $this->resetValidation();
        $this->showModal = false;
        $this->name = null;
        $this->id_ein = null;
        $this->country = null;
        $this->address_1 = null;
        $this->address_2 = null;
        $this->zip_code = null;
        $this->city = null;
        $this->region = null;
        $this->editInputs = [];
        $this->editInput = null;
    }
}
