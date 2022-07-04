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

    public $currency;
    public $currencyShow;
    public $inputCurrency;

    public function mount()
    {
        $this->inputCurrency = Auth::user()->currency_default;
        $this->currency = Currencs::distinct('code')->pluck('name', 'code');

        foreach ($this->currency as $key => $value) {
            if ( in_array($key, [ $this->inputCurrency ]) ) {
                $this->currencyShow['name'] = $value;
                $this->currencyShow['code'] = $key;
            }
        }
    }

    public function render()
    {
        return view('livewire.account.preference.currency');
    }

    public function reloadInputsInvers()
    {
        $currency = Currencs::where('code', $this->inputCurrency )->select('name','code')->first();
            $this->currencyShow['name'] = $currency['name'];
            $this->currencyShow['code'] = $currency['code'];
    }

    public function submitCurrency()
    {      
        $validation = Validator::make([
           'currency'      => $this->inputCurrency,
        ],[
            'currency'      => 'required|exists:currencs,code',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'currency_default' => $this->inputCurrency,
        ]);

        $this->reloadInputsInvers();
        $this->dispatchBrowserEvent('closedEditContainer');
        $this->alert('success', 'Update has been successful!');
    }
}