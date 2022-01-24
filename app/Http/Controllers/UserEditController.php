<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->name = $request->name;
        $user->save();
        return response()->json($user,200);
    }
    public function editLastName(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'last_name'       => 'required', 
        ], 
        [
            'last_name'       => 'last_name Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->last_name = $request->last_name;
        $user->save();
        return response()->json($user,200);
    }
    public function editEmail(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'email'       => 'email|unique:users', 
        ], 
        [
            'email'       => 'email Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->email = $request->email;
        $user->save();
        return response()->json($user,200);
    }
    public function editPhone(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'phone'       => 'required|unique:users', 
        ], 
        [
            'phone'       => 'phone Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->phone = $request->phone;
        $user->save();
        return response()->json($user,200);
    }
    public function editSex(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'sex'       => 'required', 
        ], 
        [
            'sex'       => 'Genero Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->sex = $request->sex;
        $user->save();
        return response()->json($user,200);
    }
    public function editPassword(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'password'       => 'required', 
        ], 
        [
            'password'       => 'password Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->password= $request->password;
        $user->save();
        return response()->json($user,200);
    }
    public function editDateBirth(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'date_birth'       => 'required', 
        ], 
        [
            'date_birth'       => 'date_birth Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->date_birth= $request->date_birth;
        $user->save();
        return response()->json($user,200);
    }
    public function editAddress(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'address'       => 'required', 
        ], 
        [
            'address'       => 'address Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->address= $request->address;
        $user->save();
        return response()->json($user,200);
    }
    public function editGovernmentid(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'governmentid'       => 'required', 
        ], 
        [
            'governmentid'       => 'government Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->governmentid= $request->governmentid;
        $user->save();
        return response()->json($user,200);
    }
    public function editEmergencyContact(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'emergency_contact'       => 'required', 
        ], 
        [
            'emergency_contact'       => 'emergency contact Required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 202);
        }
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found"],404);
        }
        $user->emergencycontact= $request->emergencycontact;
        $user->save();
        return response()->json($user,200);
    }

    
}
