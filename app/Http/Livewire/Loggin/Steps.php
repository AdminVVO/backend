<?php

namespace App\Http\Livewire\Loggin;

use Hash;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Twilio;
use App\Models\CodeVerification;
use App\Models\Help;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Carbon;

class Steps extends Component
{
    use LivewireAlert;
    
    public $routeRedirect;
    public $step = 'loggin';
    public $logIn = false;
    public $count = 0;

    public $input = [];

    public $content = [
        'type' => null,
        'recipients' => null,
    ];

    public $listeners = [
        'submitInputPhone',
        'selectDateLogin',
        'submitInputPhoneLogIn',

        'eventLoggin',
        'returnBack',
        'eventSteps',
    ];

    public function mount()
    {
        $this->input = [
            'phone' => null,
        ];
    }

    public function render()
    {
        return view('livewire.loggin.steps');
    }

    public function eventLoggin()
    {
        $this->step = 'loggin';
        $this->reset(['input','content']);
        $this->dispatchBrowserEvent('telDOMChanged');
    }

    public function returnBack($payload)
    {
        $this->step = $payload;
    }
    
    public function changeState()
    {
        $this->reset(['input']);
        $this->logIn = !$this->logIn;

        if ( $this->logIn ) {
            $this->input = [
                'email' => null,
            ];
        }

        if ( !$this->logIn ) {
            $this->input = [
                'phone' => null,
            ];
        }
    }

    public function submitInputEmail()
    {
        $validation = Validator::make([
           'errorInputEmail' => $this->input['email'],
        ],[
            'errorInputEmail' => 'required|email',
        ]);

            if ($validation->fails())
                $validation->validate();

        $this->step = 'verification';
        $content = [
            'type' => 'email',
            'recipients' => $this->input['email'],
        ];

        $this->sendInputForm( $content );
    }

    public function submitInputPhone($payload)
    {
        $validation = Validator::make([
           'sendInputPhone' => $payload,
        ],[
            'sendInputPhone' => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();

        $this->step = 'verification';
        $content = [
            'type' => 'phone',
            'recipients' => $payload,
        ];

        $this->sendInputForm( $content );
    }

    private function sendInputForm($payload)
    {
        $code = $this->sendEmailPhoneVerificationNotification($payload['recipients'], $payload['type']);

        CodeVerification::updateOrCreate(
            [ 'to' => $payload['recipients'] ],
            [ 'code' => $code ]
        );

        $this->reset(['input']);
        $this->input = [
            'one' => null,
            'two' => null,
            'tree' => null,
            'four' => null,
            'five' => null,
            'six' => null,
        ];
        $this->content['type'] = $payload['type'];
        $this->content['recipients'] = $payload['recipients'];
        $this->resetValidation();
        $this->alert('success', 'Verification code sent!');
    }

    public function submitCodeVerification()
    {
        $code_verifications = $this->input['one'] . $this->input['two'] . $this->input['tree'] . $this->input['four'] . $this->input['five'] . $this->input['six'];

        $validation = Validator::make([
           'code_verifications' => $code_verifications,
        ],[
            'code_verifications' => 'required|digits:6|exists:code_verifications,code',
        ]);

            if ($validation->fails()){
                $this->alert('warning', 'Enter code is invalid.');
                $validation->validate();
            }

        $this->sendConfirCode( $code_verifications, 'loggInOut' );
    }

    private function sendConfirCode($payload, $to)
    {
        CodeVerification::where('code', $payload )->forceDelete();
        
        if ( $this->content['type'] === 'phone' )
            $authUser = User::where('phone', $this->content['recipients'] )->first();

        if ( $this->content['type'] === 'email' )
            $authUser = User::where('email', $this->content['recipients'] )->first();
        
        if ( $authUser ) {

            if ( $authUser->acount_actived == 0 )
                return $this->flash('error', 'Your account is deactivated.', [], route( $this->routeRedirect ));

            Auth::login( $authUser );
                return $this->flash('success', 'Welcome to Vvoutlet.', [], route( $this->routeRedirect ));
        }

        $this->step = $to;
        $this->reset(['input']);
        $this->input = [
            'name' => null,
            'last_name' => null,
            'gender' => null,
            'birth' => null,
            'email' => $this->content['type'] === 'email' ? $this->content['recipients'] : null,
            'phone' => $this->content['type'] === 'phone' ? $this->content['recipients'] : null,
            'promotion' => false,
        ];
        $this->dispatchBrowserEvent('telDOMChanged');
    }

    public function selectDateLogin($payload)
    {
        $this->input['birth'] = Carbon::createFromDate( $payload )->format('d-m-Y');
    }

    public function submitInputPhoneLogIn($payload)
    {
        $this->input['phone'] = $payload;
        $this->submitLogIn();
    }

    public function submitLogIn()
    {
        $this->count += 1;

        if($this->content['type'] == 'email') {
            $this->input['email'] = $this->content['recipients'];
        }

         if ( $this->count === 1 ) {
            $yearInQuestion = date("Y-m-d",strtotime( date("Y-m-d") . "- 18 year"));
            
            $validation = Validator::make(
            $this->input,[
                'name'      => 'required|string|min:3',
                'last_name' => 'required|string|min:3',
                'gender'    => 'required|in:Male,Female',
                'birth'     => 'required|date|before:' . $yearInQuestion,
                'email'     => 'required|email',
                'phone'     => 'required',
            ]);
                if ($validation->fails()) {
                    $this->reset('input');
                    return $validation->validate();
                }
            $content = [
                'name'      => $this->input['name'],
                'last_name' => $this->input['last_name'],
                'gender'    => $this->input['gender'],
                'dateBirth' => $this->input['birth'],
                'email'     => $this->input['email'],
                'phone'     => $this->input['phone'],
                'promotion' => $this->input['promotion'] ?? false,
            ];
            $auth = $this->sendSave( $content );
            Auth::login( $auth );
            return redirect()->to('/');
         }
    }

    private function sendSave($payload)
    {
        $authUser = User::create([
            'name'       => $payload['name'],
            'last_name'  => $payload['last_name'],
            'full_name'  => $payload['name'] .' '. $payload['last_name'],
            'date_birth' => $payload['dateBirth'],
            'sex'        => $payload['gender'],
            'email'      => $payload['email'],
            'phone'      => $payload['phone'],
            'promotions' => $payload['promotion'],
            'password'   => Hash::make( $payload['email'] . '@' . $payload['dateBirth'] ),
        ]);
        
        return $authUser;

            // return $this->flash('success', 'Welcome to Vvoutlet.', [], route( $this->routeRedirect ));
    }

    public function moreOptions()
    {
        $this->reset(['input']);
        $this->input['resend'] = $this->content['type'] === 'email' ? 'email' : 'message';
        $this->step = 'moreOptions';
    }

    public function needHelps()
    {
        $this->reset(['input','count']);
        $this->input['help'] = null;
        $this->step = 'needHelps';
    }

    public function submitResendCode()
    {        
        $validation = Validator::make([
           'resendInput' => $this->input['resend'],
        ],[
            'resendInput' => 'required|in:email,message,call',
        ]);

            if ($validation->fails())
                $this->alert('warning', 'You must select a valid option.');

        $this->resendConfirCode( $this->input['resend'] );
        $this->step = 'verification';
        $this->reset(['input','count']);
        $this->input = [
            'one' => null,
            'two' => null,
            'tree' => null,
            'four' => null,
            'five' => null,
            'six' => null,
        ];
    }

    public function submitHelp()
    {
        $validation = Validator::make([
           'helpsInput' => $this->input['help'],
        ],[
            'helpsInput' => 'required|min:50|max:250',
        ]);

            if ($validation->fails())
                $validation->validate();

        $this->step = 'messageSend';
        $this->sendHelp( $this->input['help'] );
        $this->reset(['input','content','count']);
    }
    
    private function sendHelp($payload)
    {
        SendMailController::sendMessageHelp( $this->content['recipients'], $payload );

        Help::create([
            'from'    => $this->content['recipients'],
            'message' => $payload
        ]);

        $this->alert('success', 'The request has been sent!');
            
    }

    private function resendConfirCode($payload)
    {
        if ( $payload === 'message')
            $payload = 'phone';

        $code = $this->sendEmailPhoneVerificationNotification( $this->content['recipients'], $payload );

        CodeVerification::updateOrCreate(
            [ 'to' => $this->content['recipients'] ],
            [ 'code' => $code ]
        );

        $this->alert('success', 'Verification code sent!');
    }

    private function sendEmailPhoneVerificationNotification($recipients, $type)
    {
        $code_exist = true;
        while ($code_exist) {
            $verification_code = rand(100000,999999);
            $query_if_exist = CodeVerification::where([ 'code' => $verification_code])->get();
            ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
        }

        if ( $type === 'call' ) {
            Twilio::sendCall( $verification_code, $recipients );
            return $verification_code;
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
