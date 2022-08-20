<?php

namespace App\Http\Livewire\Reservations\Tabs;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class Canceled extends Component
{
    public $reservation;
    public $reservation_id;

    public function preLoad(){

        $this->reservation = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->where('reservations.status', [6])
            ->where('listings.user_id', auth()->user()->id_user)
            ->get(['reservations.id_reservation','reservations.status', 'name', 'title', 'reservation_amount', 'reservations.created_at', 'booked', 'total_payout', 'checkin', 'checkout', 'number_guests', 'note', 'phone'])
            ->toArray();

        foreach($this->reservation as $key => $data) {
            $this->reservation[$key]['status'] = $this->status($this->reservation[$key]['status']);
            $this->reservation[$key]['checkin'] = Carbon::parse($data['checkin'])->format('M d, Y');
            $this->reservation[$key]['checkout'] = Carbon::parse($data['checkout'])->format('M d, Y');
            $this->reservation[$key]['booked'] = Carbon::parse($data['booked'])->format('M d, Y');
            $this->reservation[$key]['booked_hour'] = Carbon::parse($data['booked'])->format('g:i A');
            $this->reservation[$key]['created_at'] = Carbon::parse($data['created_at'])->format('M d, Y');
            $this->reservation[$key]['created_hour'] = Carbon::parse($data['created_at'])->format('g:i A');
        }
    }

    public function updateDetail($data) {
        $this->emitTo('reservations.tabs.modals.details', 'refreshReservation', $this->reservation[$data]['id_reservation']);
    }
    
    public function render()
    {
        $this->preLoad();
        return view('livewire.reservations.tabs.canceled');
    }

    public function status($status)
    {
        switch ($status) {
            case 6:
                return 'by guest';
                break;
        }
    }
}
