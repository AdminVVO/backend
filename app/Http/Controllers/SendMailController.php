<?php

namespace App\Http\Controllers;

use App\Models\ReservationForm;
use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
    public static function sendVerifyCode($recipients, $code)
    {   
        \Mail::to( $recipients )->send(new \App\Mail\SendCodeMail( $code ));
    }

    public static function sendMessageHelp($recipients, $message)
    {   
        $content = new \stdClass();
        $content->recipients = $recipients;
        $content->message = $message;

        \Mail::to( config('services.help_email') )->send(new \App\Mail\SendMessageHelpMail( $content ));
    }

    public static function sendMessageResort($reservation)
    {   
        $resortEmail = ReservationForm::select('listings.resort')
            ->leftJoin('listings', 'reservation_forms.listing_id', 'listings.id_listings')
            ->first();
            
        \Mail::to( $resortEmail['resort'] )->send(new \App\Mail\SendMessageResortMail( $reservation ));
    }
}
