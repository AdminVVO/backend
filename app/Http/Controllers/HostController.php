<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function viewSignHost()
    {
        return view('host.Host');
    }
}
