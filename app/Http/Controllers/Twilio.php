<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Http\Request;

class Twilio extends Controller
{
    public static function sendMessage($message, $recipients)
    {
        $account_sid = config('services.twilio.TWILIO_SID');
        $auth_token = config('services.twilio.TWILIO_AUTH_TOKEN');
        // $phone = config('services.twilio.TWILIO_PHONE_NUMBER');
        $phone = config('services.twilio.TWILIO_WHATSAPP_NUMBER');
        $twilio = new Client($account_sid, $auth_token);
        $twilio->messages->create('whatsapp:' . $recipients, [
            'from' => 'whatsapp:' . $phone,
            'body' => 'Your verification code is: ' . $message
        ]);
        // $twilio->messages->create( $recipients, [
        //     'from' => $phone,
        //     'body' => 'Your verification code is: ' . $message
        // ] );
    }

    public static function sendCall($message, $recipients)
    {
        $account_sid = config('services.twilio.TWILIO_SID');
        $auth_token = config('services.twilio.TWILIO_AUTH_TOKEN');
        $phone = config('services.twilio.TWILIO_PHONE_NUMBER');
        $twilio = new Client($account_sid, $auth_token);
        $twilio->calls->create(
            $recipients,
            $phone,
            ["url" => "https://demo.twilio.com/welcome/voice/{$message}"]
        );
    }

    public static function sendMessageValidation($phone, $user_id)
    {
        $account_sid = config('services.twilio.TWILIO_SID');
        $auth_token = config('services.twilio.TWILIO_AUTH_TOKEN');
        $service_message = config('services.twilio.TWILIO_SERVICE_MESSAGE');
        $twilio = new Client($account_sid, $auth_token);
        $app = env('APP_URL');
        $twilio->messages->create(
            $phone,
            [
                'messagingServiceSid' => $service_message,
                'body' => 'Click on the link for validation:'. $app . 'validation/process/' . $user_id
            ]
        );
    }
}
