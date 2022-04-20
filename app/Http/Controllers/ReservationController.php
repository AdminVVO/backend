<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SendMailController;
use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function viewReservation()
    {
        return view('reservation.ReservationsIndex');
    }

    public function viewReservationForm()
    {
        return view('reservation.ReservationsForm');
    }

    public function viewReservationFormCreate($id = null)
    {
        return view('reservation.ReservationsFormStore', compact('id'));
    }

    public function viewReservationFormUpdate($id)
    {
        return view('reservation.ReservationsFormStore', compact('id'));
    }

    public function viewReservationFormPreview($id)
    {
        return view('reservation.ReservationsFormPreview', compact('id'));
    }

    public function viewReservationFormSendResort($id)
    {
        SendMailController::sendMessageResort( $id );
        return view('reservation.ReservationsFormPreview', compact('id'));
    }

    public function viewReservationFormConfirmnResort($id)
    {
        return view('reservation.ReservationsFormConfirmResort', compact('id'));
    }
}
