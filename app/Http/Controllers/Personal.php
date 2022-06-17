<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Personal extends Controller
{
    public function ValidationId()
    {
        if (isset(request()->type))
        {
            if(isset(request()->id)) {
                return view('person.validation', ['user_id' => request()->id, 'type' => request()->type]);
            } 

            return view('person.validation', ['user_id' => null, 'type' => request()->type]);
        }

        if(isset(request()->id)) {
            return view('person.validation', ['user_id' => request()->id, 'type' => null]);
        } 

        return view('person.validation', ['user_id' => null, 'type' => null]);
    }
}
