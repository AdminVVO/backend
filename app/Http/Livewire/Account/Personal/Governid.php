<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Governid extends Component
{
    public $classActive = false;

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('govermen_id')->first();

        return view('livewire.account.personal.governid', compact('query'));
    }

    public function statusUpdate()
    {
        $this->classActive = !$this->classActive;
    }
}
