<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function viewAccount()
    {   
        $auth = Auth::user();
        $name = explode(' ', $auth->name );
        $last_name = explode(' ', $auth->last_name );

        $auth = [
            'name' => $name[0],
            'last_name' => $last_name[0],
            'email' => $auth->email
        ];
        
        return view('account.Account', compact('auth'));
    }

    public function viewPersonalInfo()
    {
        return view('account.PersonalInfo');
    }

    public function viewLoginSecury()
    {
        return view('account.PersonalInfo');
    }
}
