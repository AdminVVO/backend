<?php

namespace App\Http\Livewire\Reservations\Tabs;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class Upcoming extends Component
{
    public $reservation;

    public function render()
    {
        $this->reservation = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->whereIn('reservations.status', [0, 1, 2, 3])
            ->get(['reservations.status', 'name', 'title', 'booked', 'reservation_amount', 'reservations.created_at', 'total_payout', 'checkin', 'checkout', 'number_guests', 'note'])
            ->toArray();

        foreach ($this->reservation as $key => $data) {
            $this->reservation[$key]['status'] = $this->status($this->reservation[$key]['status']);
            $this->reservation[$key]['checkin'] = Carbon::parse($data['checkin'])->format('M d, Y');
            $this->reservation[$key]['checkout'] = Carbon::parse($data['checkout'])->format('M d, Y');
            $this->reservation[$key]['booked'] = Carbon::parse($data['booked'])->format('M d, Y');
            $this->reservation[$key]['booked_hour'] = Carbon::parse($data['booked'])->format('g:i A');
        }

        return view('livewire.reservations.tabs.upcoming');
    }

    public function status($status)
    {
        switch ($status) {
            case 0:
                return 'confirmed';
                break;

            case 1:
                return 'arriving tomorrow';
                break;
            case 2:
                return 'trip request';
                break;
            case 3:
                return 'currrently hosting';
                break;
        }
    }
}
