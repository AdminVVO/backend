<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function viewIndexTrips()
    {     
        return view('trips.indexTrips');
    }
}
