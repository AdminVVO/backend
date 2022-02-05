<?php

namespace App\Http\Livewire\Account\Preference;

use App\Models\User;
use App\Models\Currencs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Currency extends Component
{
    use LivewireAlert;

    public $currency = null;
    public $currencyFormt = [];
    public $classActive = false;
    public $qcurrency = [];

    public function mount()
    {
        $this->currency = Auth::user()->currency_default;
    }

    public function render()
    {
        $this->qcurrency = Currencs::select('code', 'name')->distinct('code')->get();

        foreach ($this->qcurrency as $key => $value) {
            if ( in_array($value['code'], [ $this->currency ]) ) {
                $this->currencyFormt['name'] = $value['name'];
                $this->currencyFormt['code'] = $value['code'];
            }
        }

        return view('livewire.account.preference.currency');
    }

    public function statusUpdate()
    {
        $this->resetInput();
        $this->currency = Auth::user()->currency_default;
    }

    public function changeCurrency($payload)
    {
        $this->currency = $payload;
    }

    public function submitCurrency()
    {   
        $validation = Validator::make([
           'currency'      => $this->currency,
        ],[
            'currency'      => 'required|exists:currencs,code',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'currency_default' => $this->currency,
        ]);

        $this->resetInput();

        $this->alert('success', 'Update has been successful!');
    }

    private function resetInput()
    {
        $this->classActive = !$this->classActive; 
        $this->currency = null;
        $this->resetValidation();
    }
}
