<?php

namespace App\Http\Livewire\Account\Payments\Content;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ServiceFee extends Component
{
    public $settings;

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('service_fee')->first();
            $this->settings = $query;

        return view('livewire.account.payments.content.service-fee', compact('query'));
    }

    public function changeS()
    {
        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'service_fee' => 'simplified'
        ]);
    }

    public function changeF()
    {
        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'service_fee' => 'split-fee'
        ]);
    }
}
