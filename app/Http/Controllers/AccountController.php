<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

    public function viewLoginSecury()
    {
        return view('account.LoginSecurity');
    }

    public function viewPaymentsPayouts()
    {
        return view('account.PaymentPayouts');
    }

    public function viewAddPhotoGovermID()
    {
        return view('account.GovermeID');
    }

    public function viewGlobalPreferences()
    {
        return view('account.GlobalPreferenc');
    }

    public function viewBlockAccount()
    {
        return view('blocked.blocked');
    }
}
