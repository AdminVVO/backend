<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserTemp;
use Illuminate\Support\Facades\Auth;

class Personal extends Controller
{
    public function ValidationId()
    {
        if (isset(request()->id)) {
            $this->UserAuth();

            if (isset(request()->type)) {
                return view('person.validation', ['user_id' => request()->id, 'type' => request()->type]);
            }
            if (Auth::id()) {
                return view('person.validation', ['user_id' => request()->id, 'type' => null]);
            }
        }

        if (isset(request()->type)) {
            return view('person.validation', ['user_id' => null, 'type' => request()->type]);
        }

        return view('person.validation', ['user_id' => null, 'type' => null]);
    }

    public function UserAuth()
    {
        $user = UserTemp::where('id', request()->id)->first('user_id');
        if ($user) {
            $authUser = User::where('id_user', $user->user_id)->first();
            Auth::login($authUser);
        }
    }
}
