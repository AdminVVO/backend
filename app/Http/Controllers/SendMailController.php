<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
    public function sendVerifyCode($recipients, $code)
    {   
        \Mail::to( $recipients )->send(new \App\Mail\SendCodeMail( $code ));
    }
}
