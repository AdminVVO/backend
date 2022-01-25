<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Twilio;
use App\Models\CodeVerification;
use App\Models\CountryPhone;
use App\Models\Help;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginOrRegisterForEmailPhoneController extends Controller
{
    public function initPhoneLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required'
        ]);

        if ($validator->fails())
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 200);

        try {
            $code = $this->sendEmailPhoneVerificationNotification($request['phone'], 'phone');

            CodeVerification::updateOrCreate(
                [ 'to' => $request['phone'] ],
                [ 'code' => $code ]
            );

            return response()->json([
                'status'  => 'success',
                'message' => 'Verification code sent'
            ], 200);
            
        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function initEmailLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails())
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 200);
                
        try {
            $code = $this->sendEmailPhoneVerificationNotification($request['email'], 'email');

            CodeVerification::updateOrCreate(
                [ 'to' => $request['email'] ],
                [ 'code' => $code ]
            );

            return response()->json([
                'status'  => 'success',
                'message' => 'Verification code sent'
            ], 200);
            
        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404);            
        }
    }

    public function verificationLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required'
        ]);

        if ($validator->fails())
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 200);

        try {
            $verification = CodeVerification::where('code', $request['code'])->first();

            if ( $verification ) {
                CodeVerification::where('code', $request['code'])->forceDelete();
                
                if ( $request['type'] === 'phone' )
                    $authUser = User::where('phone', $verification['to'])->first();

                if ( $request['type'] === 'email' )
                    $authUser = User::where('email', $verification['to'])->first();
                
                if ( $authUser ) {

                    Auth::login($authUser);
                        return response()->json([
                            'status'  => 'success',
                            'message' => 'Sign up..',
                            'logIn'   => true
                        ], 200);
                }

                return response()->json([
                    'status'    => 'success',
                    'message'   => 'Sign up..',
                    'redirecTo' => true
                ], 200);
            }

            return response()->json([
                'status'    => 'success',
                'codeError' => true,
                'message'   => 'Enter code is invalid.'
            ], 200);
            
        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404);   
        }
    }

    public function createLoginOrRegister(Request $request)
    {

        $yearInQuestion = date("Y-m-d",strtotime( date("Y-m-d") . "- 18 year"));

        $validator = Validator::make($request->all(), [
            'name'       => 'required|string|min:3',
            'email'      => 'required|email',
            'last_name'  => 'required|string|min:3',
            'date_birth' => 'required|date|before:' . $yearInQuestion,
            'sex'        => 'required|in:M,F'
        ]);

        if ($validator->fails())
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 200);

        try {
            $authUser = User::create([
                'name'       => $request['name'],
                'last_name'  => $request['last_name'],
                'date_birth' => $request['date_birth'],
                'sex'        => $request['sex'],
                'email'      => $request['email'],
                'phone'      => $request['phone'],
                'promotions' => $request['promotions'],
                'password'   => $request['email'] . '@' . $request['date_birth']
            ]);
            
            Auth::login( $authUser );
                return response()->json([
                    'status'  => 'success',
                    'message' => 'You have logged in..'
                ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function helpLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required'
        ]);

        if ($validator->fails())
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 200);

        try {
            SendMailController::sendMessageHelp( $request['from'], $request['message'] );

            Help::create([
                'from'    => $request['from'],
                'message' => $request['message']
            ]);
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Help message saved'
                ], 200);
            
        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function logoutLoginOrRegister(Request $request)
    {
        try {
            Session::flush();
                return response()->json([
                    'status'  => 'success',
                    'message' => 'You Logout..'
                ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function resentCodeLoginOrRegister(Request $request)
    {
        if ( $request['type'] === 'message' || $request['type'] === 'call' ) {
            $code = $this->sendEmailPhoneVerificationNotification($request['to'], 'phone');
        } 

        if ( $request['type'] === 'email' ) {
            $code = $this->sendEmailPhoneVerificationNotification($request['to'], 'email');
        }

        try {
            CodeVerification::updateOrCreate(
                [ 'to' => $request['to'] ],
                [ 'code' => $code ]
            );

            return response()->json([
                'status'  => 'success',
                'message' => 'Verification code sent'
            ], 200);
            
        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function sendEmailPhoneVerificationNotification($recipients, $type)
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


