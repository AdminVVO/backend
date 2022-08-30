<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationUserController extends Controller
{
   /* Pending Reservation */ 
    public function viewPendingReservation()
    {
        return view('reservationUser.pendingReservation');
    }
}
