<?php

namespace App\Http\Livewire\Account\Payments\Content;

use App\Models\Payments as PaymentsModel;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class Payments extends Component
{
    public $name = null;
    public $last_name = null;
    public $card_number = null;
    public $expiration = null;
    public $cvv = null;
    public $street_address = null;
    public $apt = null;
    public $city = null;
    public $state = null;
    public $zip_code = null;
    public $country = null;
    public $showModal = false;
    public $showEdit = false;
    public $editInputs = [];
    public $editInput = null;

    public function render()
    {
        $query = PaymentsModel::where(['user_id' => Auth::id() ])->orderBy('default', 'DESC')->get();

        foreach ($query as $key => $value) {
            $this->editInputs[ $key ]['name']           = $value['name'];
            $this->editInputs[ $key ]['last_name']      = $value['last_name'];
            $this->editInputs[ $key ]['card_number']    = $value['card_number'];
            $this->editInputs[ $key ]['expiration']     = $value['expiration'];
            $this->editInputs[ $key ]['street_address'] = $value['street_address'];
            $this->editInputs[ $key ]['apt']            = $value['apt'];
            $this->editInputs[ $key ]['city']           = $value['city'];
            $this->editInputs[ $key ]['state']          = $value['state'];
            $this->editInputs[ $key ]['zip_code']       = $value['zip_code'];
            $this->editInputs[ $key ]['country']        = $value['country'];
        }

        return view('livewire.account.payments.content.payments', compact('query'));
    }

    public function submitPayment()
    {
        $validation = Validator::make([
           'name'           => $this->name,
           'last_name'      => $this->last_name,
           'card_number'    => $this->card_number,
           'expiration'     => $this->expiration,
           'cvv'            => $this->cvv,
           'street_address' => $this->street_address,
           'apt'            => $this->apt,
           'city'           => $this->city,
           'state'          => $this->state,
           'zip_code'       => $this->zip_code,
           'city'           => $this->city,
           'country'        => $this->country,
        ],[
           'name'           => 'required',
           'last_name'      => 'required',
           'card_number'    => 'required|regex:/^[0-9]+$/',
           'expiration'     => 'required',
           'cvv'            => 'required|regex:/^[0-9]+$/',
           'street_address' => 'required',
           'apt'            => 'required',
           'city'           => 'required',
           'state'          => 'required',
           'zip_code'       => 'required|regex:/^[0-9]+$/',
           'city'           => 'required',
           'country'        => 'in:US,VE',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        $cards = PaymentsModel::where(['user_id' => Auth::id() ])->get();

        PaymentsModel::create([
            'user_id'        => Auth::id(),
            'card_number'    => $this->card_number,
            'name'           => $this->name,
            'last_name'      => $this->last_name,
            'expiration'     => Carbon::parse( $this->expiration, 'UTC')->format('Y-m'),
            'cvv'            => $this->cvv,
            'street_address' => $this->street_address,
            'apt'            => $this->apt,
            'city'           => $this->city,
            'state'          => $this->state,
            'zip_code'       => $this->zip_code,
            'city'           => $this->city,
            'country'        => $this->country,
            'default'        => count( $cards ) === 0 ? true : false,
        ]);

        $this->resetVal();
    }

    public function submitEditPayment()
    {
        $validation = Validator::make([
           'name'           => $this->name,
           'last_name'      => $this->last_name,
           'card_number'    => $this->card_number,
           'expiration'     => $this->expiration,
           'cvv'            => $this->cvv,
           'street_address' => $this->street_address,
           'apt'            => $this->apt,
           'city'           => $this->city,
           'state'          => $this->state,
           'zip_code'       => $this->zip_code,
           'city'           => $this->city,
           'country'        => $this->country,
        ],[
           'name'           => 'required',
           'last_name'      => 'required',
           'card_number'    => 'required|regex:/^[0-9]+$/',
           'expiration'     => 'required',
           'cvv'            => 'required|regex:/^[0-9]+$/',
           'street_address' => 'required',
           'apt'            => 'required',
           'city'           => 'required',
           'state'          => 'required',
           'zip_code'       => 'required|regex:/^[0-9]+$/',
           'city'           => 'required',
           'country'        => 'in:US,VE',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        PaymentsModel::where([
            'user_id'     => Auth::id(),
            'id_payments' => PaymentsModel::where([ 'card_number' => $this->editInputs[ $this->editInput ]['card_number'], 'user_id' => Auth::id() ])->pluck('id_payments'),
        ])->update([
            'card_number'    => $this->card_number,
            'name'           => $this->name,
            'last_name'      => $this->last_name,
            'expiration'     => Carbon::parse( $this->expiration, 'UTC')->format('Y-m'),
            'cvv'            => $this->cvv,
            'street_address' => $this->street_address,
            'apt'            => $this->apt,
            'city'           => $this->city,
            'state'          => $this->state,
            'zip_code'       => $this->zip_code,
            'city'           => $this->city,
            'country'        => $this->country,
        ]);

        $this->resetVal();
    }

    public function editModal($payload)
    {
        $this->resetVal();
        $this->editInput = $payload;
        $this->name = $this->editInputs[$payload]['name'];
        $this->last_name = $this->editInputs[$payload]['last_name'];
        $this->card_number = $this->editInputs[$payload]['card_number'];
        $this->expiration = $this->editInputs[$payload]['expiration'];
        $this->street_address = $this->editInputs[$payload]['street_address'];
        $this->apt = $this->editInputs[$payload]['apt'];
        $this->city = $this->editInputs[$payload]['city'];
        $this->state = $this->editInputs[$payload]['state'];
        $this->zip_code = $this->editInputs[$payload]['zip_code'];
        $this->country = $this->editInputs[$payload]['country'];
        $this->showModal = true;
        $this->showEdit = true;
    }

    public function showModal()
    {
        $this->resetVal();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->resetVal();
        $this->showModal = false;
    }
    
    public function resetVal()
    {
        $this->resetValidation();
        $this->name = null;
        $this->last_name = null;
        $this->card_number = null;
        $this->expiration = null;
        $this->cvv = null;
        $this->street_address = null;
        $this->apt = null;
        $this->city = null;
        $this->state = null;
        $this->zip_code = null;
        $this->editInput = null;
        $this->showModal = false;
        $this->showEdit = false;
    }
}



