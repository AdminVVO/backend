<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// antonio
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //get users and insert users
    public function getUserid(){
        $user = User::find(Auth::id());
        if(is_null($user)){
            return response()->json(["message"=>"User not found",404]);
        }
        return response()->json($user,200);
    }

    public function insertUser(Request $request){
        $user = User::create($request->all());
        if(is_null($user)){
            return response()->json(["message"=>"User not Register",404]);
        }
        return response()->json($user,200);
    }
}
