<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use Exception;
class UserEditController extends Controller
{
    /*
        "name":"Prueba 2",
        "last_name":"ejemplo2",
        "email":"ejemplo2@gmail.com",
        "phone":"989898943",
        "sex":"F",
        "password":"123456789"  
        
        date_birth
        address
        governmentid
        emergencycontact
         $request->validate($request, 
        [
            'name' => 'required',
        ]);


        
        */
    public function editName(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'name'       => 'required', 
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->name = $request->name;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
        
    }
    public function editLastName(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'last_name'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->last_name = $request->last_name;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
        
    }
    public function editEmail(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'email'       => 'email|unique:users', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->email = $request->email;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);

        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
    }
    public function editPhone(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'phone'       => 'required|unique:users', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->phone = $request->phone;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
    }
    public function editSex(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'sex'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->sex = $request->sex;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }

    }
    public function editPassword(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'password'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }

        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->password= $request->password;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
       
    }
    public function editDateBirth(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'date_birth'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->date_birth= $request->date_birth;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);  
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
       
    }
    public function editAddress(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'address'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->address= $request->address;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
          
    }
    public function editGovernmentid(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'governmentid'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->governmentid= $request->governmentid;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
       
    }
    public function editEmergencyContact(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'emergency_contact'       => 'required', 
        ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 202);
        }
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
            $user->emergencycontact= $request->emergencycontact;
            $user->save();
            return response()->json( [
                'status' => 'success',
                'content'=>$user,
                'message' =>'successful update'
                ],200);
        }catch(Exception $e){
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ], 404); 
        }
        
    }

    
}
