<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Http\Request;

class Twilio extends Controller
{
    public function sendMessage($message, $recipients)
    {
        $account_sid = config('services.twilio.TWILIO_SID');
        $auth_token = config('services.twilio.TWILIO_AUTH_TOKEN');
        $phone = config('services.twilio.TWILIO_WHATSAPP_NUMBER');
        $twilio = new Client($account_sid, $auth_token);
        $twilio->messages->create('whatsapp:' . $recipients, [
            'from' => 'whatsapp:' . $phone,
            'body' => 'Your verification code is: ' . $message
        ] );
    }
}
