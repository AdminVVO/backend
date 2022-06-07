<?php

namespace App\Http\Livewire\Loggin;

use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Twilio;
use App\Models\CodeVerification;
use App\Models\Help;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Steps extends Component
{
    use LivewireAlert;
    
    public $step = 'loggin';
    public $content = [
        'type' => '',
        'recipients' => '',
    ];

    public $listeners = [
        'eventLoggin',
        'returnBack',
        'eventSteps',
    ];

    public function render()
    {
        return view('livewire.loggin.steps');
    }

    public function eventLoggin()
    {
        $this->step = 'loggin';
    }

    public function returnBack($payload)
    {
        $this->step = $payload;
    }
    
    public function eventSteps($payload)
    {

        if ( $payload['from'] === 'loggin' ){
            $this->step = $payload['to'];
            $this->sendInputForm( $payload['content'] );
        }

        if ( $payload['from'] === 'verificationCode' ){
            $this->sendConfirCode( $payload['content'], $payload['to'] );
        }

        if ( $payload['from'] === 'verificationOptions' ){
            $this->step = $payload['to'];
        }

        if ( $payload['from'] === 'moreOptions' ){
            $this->step = $payload['to'];
            $this->resendConfirCode( $payload['content'] );
        }

        if ( $payload['from'] === 'moreOptionsHelps' ){
            $this->step = $payload['to'];
        }

        if ( $payload['from'] === 'needHelps' ){
            $this->step = $payload['to'];
            $this->sendHelp( $payload['content'] );
        }

        if ( $payload['from'] === 'loggInOut' ){
            $this->sendSave( $payload['content'] );
        }
    }
    
    private function sendSave($payload)
    {
        try {
            $authUser = User::create([
                'name'       => $payload['name'],
                'last_name'  => $payload['last_name'],
                'full_name'  => $payload['name'] .' '. $payload['last_name'],
                'date_birth' => $payload['dateBirth'],
                'sex'        => $payload['gender'],
                'email'      => $payload['email'],
                'phone'      => $payload['phone'],
                'promotions' => $payload['promotion'],
                'rol_id'     => 1,
                'password'   => $payload['email'] . '@' . $payload['dateBirth']
            ]);
            
            Auth::login( $authUser );
            return $this->flash('success', 'Welcome to Vvoutlet.', [], route::current());

        } catch (Exception $e) {
            return $this->alert('error', $e->getMessage());

        }
    }
    
    private function sendHelp($payload)
    {
        try {
            SendMailController::sendMessageHelp( $this->content['recipients'], $payload );

            Help::create([
                'from'    => $this->content['recipients'],
                'message' => $payload
            ]);

            $this->alert('success', 'The request has been sent!');
            
        } catch (Exception $e) {
            return $this->alert('error', $e->getMessage());

        }
    }

    private function sendInputForm($payload)
    {
        try {
            $code = $this->sendEmailPhoneVerificationNotification($payload['recipients'], $payload['type']);

            CodeVerification::updateOrCreate(
                [ 'to' => $payload['recipients'] ],
                [ 'code' => $code ]
            );

            $this->content['type'] = $payload['type'];
            $this->content['recipients'] = $payload['recipients'];
            $this->alert('success', 'Verification code sent!');
            
        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());           
        }
    }
    
    private function sendConfirCode($payload, $to)
    {
        try {
            CodeVerification::where('code', $payload)->forceDelete();
            
            if ( $this->content['type'] === 'phone' )
                $authUser = User::where('phone', $this->content['recipients'] )->first();

            if ( $this->content['type'] === 'email' )
                $authUser = User::where('email', $this->content['recipients'] )->first();
            
            if ( $authUser ) {

                if ( $authUser->acount_actived == 0)
                    return $this->flash('error', 'Your account is deactivated.', [], route::current());

                Auth::login( $authUser );
                    return $this->flash('success', 'Welcome to Vvoutlet.', [], route::current());
            }

            $this->step = $to;
            
        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());

        }
    }

    private function resendConfirCode($payload)
    {
        $code = $this->sendEmailPhoneVerificationNotification( $this->content['recipients'], $payload == 'email' ? 'email' : 'phone' );

        try {
            CodeVerification::updateOrCreate(
                [ 'to' => $this->content['recipients'] ],
                [ 'code' => $code ]
            );

            $this->alert('success', 'Verification code sent!');
            
        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());

        }
    }

    private function sendEmailPhoneVerificationNotification($recipients, $type)
    {
        $code_exist = true;
        while ($code_exist) {
            $verification_code = rand(100000,999999);
            $query_if_exist = CodeVerification::where([ 'code' => $verification_code])->get();
            ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
        }

        if ( $type === 'phone' ) {
            Twilio::sendMessage( $verification_code, $recipients );
            return $verification_code;
        }

        if ( $type === 'email' ) {
            SendMailController::sendVerifyCode( $recipients, $verification_code );
            return $verification_code;
        }
    }
}
