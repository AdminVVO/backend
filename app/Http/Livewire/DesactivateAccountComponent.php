<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\User;
use DB;
use Livewire\Component;

class DesactivateAccountComponent extends Component
{
    public function render()
    {
        return view('livewire.desactivate-account-component');
    }

    public function desactiveAccount()
    {
        $session = DB::table('sessions')->where('user_id', auth()->id())->pluck('id');

            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'acount_actived' => false
            ]);

        foreach ($session as $value)
            DB::table('sessions')->where('id', $value)->delete();

        return redirect('/');
    }

}


