<?php

namespace App\Http\Livewire\Reservations\Tabs;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class Complete extends Component
{
    public $reservation;

    public function render()
    {
        $this->reservation = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->whereIn('reservations.status', [4, 5])
            ->get(['reservations.status', 'name', 'title', 'reservation_amount', 'reservations.created_at', 'booked', 'total_payout', 'checkin', 'checkout', 'number_guests', 'note'])
            ->toArray();

        foreach ($this->reservation as $key => $data) {
            $this->reservation[$key]['status'] = $this->status($this->reservation[$key]['status']);
            $this->reservation[$key]['checkin'] = Carbon::parse($data['checkin'])->format('M d, Y');
            $this->reservation[$key]['checkout'] = Carbon::parse($data['checkout'])->format('M d, Y');
            $this->reservation[$key]['booked'] = Carbon::parse($data['booked'])->format('M d, Y');
            $this->reservation[$key]['booked_hour'] = Carbon::parse($data['booked'])->format('g:i A');
        }
        return view('livewire.reservations.tabs.complete');
    }

    public function status($status)
    {
        switch ($status) {
            case 4:
                return 'review guest';
                break;
            case 5:
                return 'past guest';
                break;
        }
    }
}
