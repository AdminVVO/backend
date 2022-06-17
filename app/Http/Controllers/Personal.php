<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Personal extends Controller
{
    public function ValidationId()
    {
        if (isset(request()->id))
        {
            return view('person.validation', ['user_id' => request()->id]);
        }

        return view('person.validation', ['user_id' => null]);
    }
}
