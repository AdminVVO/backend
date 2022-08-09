<?php

namespace App\Http\Livewire\Reservations;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class ShowReservation extends Component
{
    public $reservation;
    public $data = [];

    public function render()
    {
        $this->data = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->join('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
            ->where('id_reservation', $this->reservation)
            ->first([
                'id_user', 'full_name', 'name', 'checkin', 'checkout', 'total_payout', 'booked', 'users.created_at',
                'phone', 'number_guests', 'internal_title'
            ])->toArray();

        $date_init = Carbon::parse($this->data['checkin']);
        $date_end = Carbon::parse($this->data['checkout']);
        

        if (($date_end->format('m') - $date_init->format('m')) == 0) {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                $date_end->format('d');
        } else {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                $date_end->format('M') . ' ' . $date_end->format('d');
        }
        
        $this->data['arriving'] = $date_init->format('d')-now()->format('d');
        $this->data['created_at'] = Carbon::parse($this->data['created_at'])->isoFormat('MMMM Y');
        $this->data['checkin'] = Carbon::parse($this->data['checkin'])->isoFormat('ddd, MMM D');
        $this->data['checkout'] = Carbon::parse($this->data['checkout'])->isoFormat('ddd, MMM D');
        $this->data['booked'] = Carbon::parse($this->data['booked'])->isoFormat('ddd, MMM D, Y');
        return view('livewire.reservations.show-reservation');
    }
}
