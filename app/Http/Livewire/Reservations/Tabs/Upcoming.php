<?php

namespace App\Http\Livewire\Reservations\Tabs;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class Upcoming extends Component
{
    public $reservation;
    public $validatedData;

    public function preLoad() {
        $this->validatedData = true;
        $this->reservation = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->whereIn('reservations.status', [0, 1, 2, 3])
            ->where('listings.user_id', auth()->user()->id_user)
            ->get(['reservations.id_reservation','reservations.status', 'name', 'title', 'booked', 'reservation_amount', 'reservations.created_at', 'total_payout', 'checkin', 'checkout', 'number_guests', 'note', 'phone'])
            ->toArray();

        if(count($this->reservation) == 0) {
            $this->validatedData = false;
        }
        foreach ($this->reservation as $key => $data) {
            $this->reservation[$key]['status'] = $this->reservation[$key]['status'];
            $this->reservation[$key]['checkin'] = Carbon::parse($data['checkin'])->format('M d, Y');
            $this->reservation[$key]['checkout'] = Carbon::parse($data['checkout'])->format('M d, Y');
            $this->reservation[$key]['booked'] = Carbon::parse($data['booked'])->format('M d, Y');
            $this->reservation[$key]['booked_hour'] = Carbon::parse($data['booked'])->format('g:i A');
        }
    }

    public function updatePhone($data) {
        $this->emitTo('reservations.tabs.modals.options', 'refreshOption', $data);
    }
    
    public function updateDetail($data) {
        $this->emitTo('reservations.tabs.modals.details', 'refreshReservation', $this->reservation[$data]['id_reservation']);
        $this->emitTo('reservations.tabs.modals.reports', 'refreshReport', $this->reservation[$data]['id_reservation']);
        
    }

    public function render()
    {
        $this->preLoad();
        $this->emitTo('reservations.reservation-index', 'refreshValidated', $this->validatedData);
        return view('livewire.reservations.tabs.upcoming');
    }
}
