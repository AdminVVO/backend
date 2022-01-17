<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Twilio;
use App\Models\CodeVerification;
use App\Models\CountryPhone;
use App\Models\Help;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginOrRegisterForEmailPhoneController extends Controller
{
    public function countryPhone()
    {
        return CountryPhone::all()->toArray();
    }

    public function initPhoneLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required'
        ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->getMessages() as $item) {
                    $response['messages'][] = $item;
                }

                return [
                    'status'  => 400,
                    'error'   => false,
                    'message' => $response['messages']
                ];
            }

        try {
            $code = $this->sendEmailPhoneVerificationNotification($request['phone'], 'phone');

            CodeVerification::create([ 'code' => $code, 'to' => $request['phone'] ]);

            return [
                'status'  => 200,
                'error'   => false,
                'message' => 'Verification code sent'
            ];
            
        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
            
        }
    }

    public function initEmailLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->getMessages() as $item) {
                    $response['messages'][] = $item;
                }

                return [
                    'status'  => 400,
                    'error'   => false,
                    'message' => $response['messages']
                ];
            }

        try {
            $code = $this->sendEmailPhoneVerificationNotification($request['email'], 'email');

            CodeVerification::updateOrCreate(
                [ 'to' => $request['email'] ],
                [ 'code' => $code ]
            );

            return [
                'status'  => 200,
                'error'   => false,
                'message' => 'Verification code sent'
            ];
            
        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
            
        }
    }

    public function verificationLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required'
        ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->getMessages() as $item) {
                    $response['messages'][] = $item;
                }

                return [
                    'status'  => 400,
                    'error'   => false,
                    'message' => $response['messages']
                ];
            }

        try {
            $verification = CodeVerification::where('code', $request['code'])->first();

            if ( $verification ) {
                CodeVerification::where('code', $request['code'])->forceDelete();
                
                if ( $request['type'] === 'phone' )
                    $authUser = User::where('phone', $request['phone'])->first();

                if ( $request['type'] === 'email' )
                    $authUser = User::where('email', $request['email'])->first();
                
                if ( $authUser ) {

                    Auth::login($authUser);
                    return [
                        'status'  => 200,
                        'error'   => false,
                        'message' => 'You are logged in, Welcome..'
                    ];
                }
                    
                return [
                    'status'  => 202,
                    'error'   => false,
                    'message' => 'Sign up..'
                ];
            }

            return [
                'status'  => 200,
                'error'   => true,
                'message' => 'Enter code is invalid.'
            ];
            
        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
        }
    }

    public function createLoginOrRegister(Request $request)
    {
        try {
            $authUser = User::create([
                'name'       => $request['name'] . ' ' . $request['last_name'],
                'date_birth' => $request['date_birth'],
                'sex'        => $request['sex'],
                'email'      => $request['email'],
                'phone'      => isset( $request['phone'] ) ? $request['phone'] : null,
                'promotions' => $request['promotions'],
                'password'   => $request['email'] . '@' . $request['date_birth']
            ]);
            
            Auth::login($authUser);
            return [
                'status'  => 200,
                'error'   => false,
                'message' => 'You have logged in..'
            ];

        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
        }
    }

    public function helpLoginOrRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required'
        ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->getMessages() as $item) {
                    $response['messages'][] = $item;
                }

                return [
                    'status'  => 400,
                    'error'   => false,
                    'message' => $response['messages']
                ];
            }

        try {

            Help::create([
                'from'    => $request['from'],
                'message' => $request['message']
            ]);

            return [
                'status'  => 200,
                'error'   => false,
                'message' => 'Help message saved'
            ];
            
        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
            
        }
    }

    public function logoutLoginOrRegister(Request $request)
    {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }






    public function resentCodePhoneLoginOrRegister(Request $request)
    {
        try {
            $code = $this->sendEmailPhoneVerificationNotification($request['phone'], 'phone');

            CodeVerification::updateOrCreate(
                [ 'to' => $request['phone'] ],
                [ 'code' => $code ]
            );

            return [
                'status'  => 200,
                'error'   => false,
                'message' => 'Verification code resent'
            ];
            
        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
            
        }
    }

    public function resentCodeEmailLoginOrRegister(Request $request)
    {
        try {
            $code = $this->sendEmailPhoneVerificationNotification($request['email'], 'email');

            CodeVerification::updateOrCreate(
                [ 'to' => $request['email'] ],
                [ 'code' => $code ]
            );

            return [
                'status'  => 200,
                'error'   => false,
                'message' => 'Verification code resent'
            ];
            
        } catch (Exception $e) {
            return [
                'status'  => 404,
                'error'   => true,
                'message' => $e->getMessage()
            ];
            
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


