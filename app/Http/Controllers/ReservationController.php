<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SendMailController;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Listing\Listings;

class ReservationController extends Controller
{
   /* Crear Reservacion Send Form */ 
    public function viewReservationCreateSendForm($id)
    {
        return view('reservation.client.indexClient', compact('id'));
    }
    
    public function viewReservation()
    {
        $listings = Listings::where('user_id', auth()->user()->id_user)->get('id_listings')->toArray();
        $reservation = Reservation::whereIn('listing_id', $listings)->get()->toArray();   

        if(count($reservation) == 0) {
            return redirect('/');
        }

        return view('reservation.ReservationsIndex');
    }

    public function viewReservationForm()
    {
        return view('reservation.ReservationsForm');
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

    public function viewChangeOrCancelReservations($id)
    {
        return view('reservation.ChangeOrCancelReservations', compact('id'));
    }

    public function viewChangeReservations()
    {
        return view('reservation.ChangeReservations');
    }

    public function viewReservationClient($id) {
        return view('reservation.ShowReservation', compact('id'));
    }
}
