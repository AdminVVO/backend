<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// antonio
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
class UserController extends Controller
{
    //get users and insert users
    public function getUserid(){
        try{
            $user = User::find(Auth::id());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
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

    public function insertUser(Request $request){
        try{
            $user = User::create($request->all());
            if(!$user){
                return response()->json(
                    [
                    'status' => 'error',
                    'message'=>'User not found'
                    ],202);
            }
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
