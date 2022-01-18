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

    public function sendMessageHelp($recipients, $message)
    {   
        $content = new \stdClass();
        $content->recipients = $recipients;
        $content->message = $message;

        \Mail::to( config('services.help_email') )->send(new \App\Mail\SendMessageHelpMail( $content ));
    }
}
