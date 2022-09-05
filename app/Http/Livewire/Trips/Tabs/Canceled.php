<?php

namespace App\Http\Livewire\Trips\Tabs;

use App\Models\Reservation;
use App\Models\ReservationUser;
use Carbon\Carbon;
use Livewire\Component;

class Canceled extends Component
{
    public $reservation;
    public $bool = true;

    public function preLoad()
    {
        $this->reservation = ReservationUser::join('listings', 'reservation_users.listing_id', 'listings.id_listings')
        ->join('listing_locations', 'reservation_users.listing_id', 'listing_locations.listing_id')
                                        ->where('reservation_users.user_id', auth()->user()->id_user)
                                        ->whereIn('reservation_users.status', [6])
                                        ->get(['photos', 'date_in', 'date_out', 'title', 'descriptions', 'id_reservation_users', 'id_listings'])
                                        ->toArray();

        if (!$this->reservation)
            return $this->bool = false;

        foreach ($this->reservation as $key => $row) {
            $checkin = Carbon::parse($row['date_in']);
            $checkout = Carbon::parse($row['date_out']);

            if ($checkin->format('Y') != $checkout->format('Y')) {
                $this->reservation[$key]['date'] = $checkin->format('M d Y') . ' - ' . $checkout->format('M d Y');
            } else if ($checkin->format('M') != $checkout->format('M')) {
                $this->reservation[$key]['date'] = $checkin->format('M d') . ' - ' . $checkout->format('M d, Y');
            } else {
                $this->reservation[$key]['date'] = $checkin->format('M d') . ' - ' . $checkout->format('d, Y');
            }

            $this->reservation[$key]['photo_one'] = json_decode($row['photos'])[0]->name;
            $this->reservation[$key]['photo_two'] = json_decode($row['photos'])[1]->name;
            $this->reservation[$key]['photo_three'] = json_decode($row['photos'])[2]->name;
        }
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.trips.tabs.canceled');
    }

    public function updateDetail($key)
    {
        $this->emitTo('trips.tabs.modals.canceled', 'refreshCanceled', $this->reservation[$key]['id_reservation_users']);
    }
}
