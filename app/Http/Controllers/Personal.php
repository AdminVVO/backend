<?php

namespace App\Http\Controllers;

use App\Models\PersonValidation;
use App\Models\User;
use App\Models\UserTemp;
use Illuminate\Support\Facades\Auth;

class Personal extends Controller
{
    public function ValidationId()
    {
        if (isset(request()->id)) {
            $this->UserAuth();

            if (Auth::id()) {
                return view('person.validation', ['user_id' => request()->id, 'type' => null]);
            }
        }

        $reference = PersonValidation::where(['user_id' => Auth::id()])->pluck('id_person_validation')->first();

        if (isset($reference)) {
            return view('person.validation', ['user_id' => null, 'type' => 'finish']);
        }

        return view('person.validation', ['user_id' => null, 'type' => null]);
    }

    public function UserAuth()
    {
        $user = UserTemp::where('id', request()->id)->where('type', 'validated_account')->first('user_id');
        if ($user) {
            $authUser = User::where('id_user', $user->user_id)->first();
            Auth::login($authUser);
        }
    }
}
