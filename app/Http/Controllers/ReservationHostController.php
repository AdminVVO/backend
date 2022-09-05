<?php

namespace App\Http\Controllers;

use App\Models\ReservationUser;
use Illuminate\Http\Request;
use Auth;

class ReservationHostController extends Controller
{
    public function viewReservation()
    {
        return view('reservationHost.index');
    }
}
