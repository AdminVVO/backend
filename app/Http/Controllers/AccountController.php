<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function viewAccount()
    {
        return view('account.Account');
    }

    public function viewPersonalInfo()
    {
        return view('account.PersonalInfo');
    }
}
