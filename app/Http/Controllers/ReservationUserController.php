<?php

namespace App\Http\Controllers;

use App\Models\Listing\Listings;
use App\Models\ReservationUser;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class ReservationUserController extends Controller
{
   /* Pending Reservation */ 
    public function viewPendingReservation()
    {
      if ( !Session::get('reservation') )
         abort(404);



      $reservation = ReservationUser::select(
                     'code_reservation',
                     'date_in',
                     'date_out',
                     'listing_id',
                  )->where([ 
                     'id_reservation_users' => Session::get('reservation') 
                     // 'id_reservation_users' => $id 
                  ])->with([
                     'Listings:id_listings,title,legal,user_id,photos',
                     'ListingsRulers:listing_id,additional_rules,events_allowed,smoking_allowed,pets_allowed',
                     'ListingPolicies:listing_id,checkout_time,checkin_window_start,checkin_window_end',
                 ])->first();

      $explodeListingID = explode('-', $reservation->Listings->id_listings);
      $photo = 'storage/photos-listing/' . $explodeListingID[4] . '/' . $reservation->Listings->photos[0]['name'];

      $user = User::PendingReservationUser($reservation->Listings->user_id);

      return view('reservationUser.pendingReservation', compact('reservation', 'user', 'photo') );
    }
}
