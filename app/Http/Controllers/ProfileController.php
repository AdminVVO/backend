<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function viewProfile($id)
    {
        if ( User::where([ 'id_user' => $id ])->doesntExist() )
            return abort(404);
        
        return view('profile.index', ['idUser' => $id]);
    }
}
