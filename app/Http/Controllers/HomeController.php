<?php

namespace App\Http\Controllers;

use App\Models\Currencs;
use App\Models\LanguagesRegions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function viewHome()
    {
        return view('home.index');
    }
    
    public function index(Request $request)
    {
        if (view()->exists($request->path()))
            return view($request->path());
        
        return abort(404);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');  
    }
}
