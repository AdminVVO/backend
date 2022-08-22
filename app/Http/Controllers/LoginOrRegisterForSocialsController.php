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
        // $authUser = User::where('email', 'lenier@gmail.com')->first();
        // Auth::login($authUser);

        // return redirect()->back();


        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        $response_callback = request()->all();
        
        if ( Auth::check() )
            return redirect()->route('/');

        try {
            $user = Socialite::driver('google')->user();

            $authUser = $this->findOrCreateUserGoogle($user);

                if ( $authUser->acount_actived == 0)
                    return redirect()->route('/');

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

            $arrayName = explode(' ', $user->name);

        User::updateOrCreate([
                'email' =>  $user->email
            ],[
                'name'      => $arrayName[0],
                'last_name' => $arrayName[1],
                'full_name' => $arrayName[0] .' '. $arrayName[1],
                'password'  => Hash::make( $user->name . '@' . $user->id ),
                'rol_id'  => 1,
                'google_id' => $user->id
            ]);

        return User::where('email', $user->email)->first();
    }

    public function loginWithFacebook()
    {

        // $authUser = User::where('email', 'Dev@gmail.com')->first();
        // Auth::login($authUser);

        // return redirect()->route('/');

        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook()
    {
        $response_callback = request()->all();
        
        if ( Auth::check() )
            return redirect()->route('/');

        try {
            $user = Socialite::driver('facebook')->user();

            $authUser = $this->findOrCreateUserFacebook($user);

                if ( $authUser->acount_actived == 0)
                    return redirect()->route('/');

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

            $arrayName = explode(' ', $user->name);

        User::updateOrCreate([
                'email' =>  $user->email
            ],[
                'name'      => $arrayName[0],
                'last_name' => $arrayName[1],
                'full_name' => $arrayName[0] .' '. $arrayName[1],
                'password'  => Hash::make( $user->name . '@' . $user->id ),
                'facebook_id' => $user->id
            ]);

        return User::where('email', $user->email)->first();
    }
}
