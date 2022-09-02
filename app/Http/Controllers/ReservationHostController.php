<?php

namespace App\Http\Controllers;

use App\Models\ReservationUser;
use Illuminate\Http\Request;
use Auth;

class ReservationHostController extends Controller
{
    public function viewReservation()
    {
        $ReservationHost = ReservationUser::where('user_id_listing', Auth::id() )->count();

        return view('reservationHost.index', compact('ReservationHost'));
    }
}
