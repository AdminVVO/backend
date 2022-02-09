<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function viewReservation()
    {
        return view('reservation.ReservationsIndex');
    }
}
