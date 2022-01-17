<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginOrRegisterForSocialsController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        $response_callback = request()->all();

        if ( isset($response_callback['code'] ) === false ) {
            return redirect()->route('/');
        }

        try {
            $user = Socialite::driver('google')->user();
            $authUser = $this->findOrCreateUserGoogle($user);
            Auth::login($authUser);

            return redirect()->route('/');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function findOrCreateUserGoogle($user)
    {
        $authUser = User::where('google_id', $user->id)->first();
            if ($authUser) {
                return $authUser;
            }

        return User::updateOrCreate([
                'email' =>  $user->email
            ],[
                'name'      => $user->name,
                'password'  => Hash::make( $user->name . '@' . $user->id ),
                'google_id' => $user->id
            ]);
    }

    public function loginWithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook()
    {
        $response_callback = request()->all();

        if ( isset($response_callback['error'] ) ) {
            emotify('error', 'You are awesome, your data was successfully created');
            return redirect()->route('/');
        }

        try {
            $user = Socialite::driver('facebook')->user();
            $authUser = $this->findOrCreateUserFacebook($user);
            Auth::login($authUser);

            return redirect()->route('/');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function findOrCreateUserFacebook($user)
    {
        $authUser = User::where('facebook_id', $user->id)->first();
            if ($authUser) {
                return $authUser;
            }

        return User::updateOrCreate([
                'email' =>  $user->email
            ],[
                'name'      => $user->name,
                'password'  => Hash::make( $user->name . '@' . $user->id ),
                'facebook_id' => $user->id
            ]);
    }
}
