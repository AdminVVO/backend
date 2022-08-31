<?php

namespace App\Http\Livewire\Trips\Tabs;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class Past extends Component
{
    public $reservation;
    public $bool = true;

    public function preLoad()
    {
        $this->reservation = Reservation::join('listings', 'reservations.listing_id', 'listings.id_listings')
                                        ->where('reservations.user_id', auth()->user()->id_user)
                                        ->whereIn('reservations.status', [5,1,2,3,4,5])
                                        ->get(['photos', 'checkin', 'checkout', 'title', 'descriptions', 'id_reservation', 'id_listings'])
                                        ->toArray();

        if (!$this->reservation)
            return $this->bool = false;

        foreach ($this->reservation as $key => $row) {
            $checkin = Carbon::parse($row['checkin']);
            $checkout = Carbon::parse($row['checkout']);

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
        return view('livewire.trips.tabs.past');
    }

    public function updatePast($key)
    {
        $this->emitTo('trips.tabs.modals.past', 'refreshPast', $this->reservation[$key]['id_reservation']);
    }
}