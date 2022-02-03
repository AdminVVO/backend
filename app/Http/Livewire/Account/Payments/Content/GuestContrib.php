<?php

namespace App\Http\Livewire\Account\Payments\Content;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GuestContrib extends Component
{
    public $contribu;

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('constributions')->first();
            $this->contribu = $query;

        return view('livewire.account.payments.content.guest-contrib', compact('query'));
    }

    public function changeContrb()
    {
        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'constributions' => !$this->contribu
        ]);
    }
}