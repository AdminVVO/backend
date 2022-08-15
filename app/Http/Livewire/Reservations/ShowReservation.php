<?php

namespace App\Http\Livewire\Reservations;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class ShowReservation extends Component
{
    public $reservation;
    public $data = [];
    public $note = '';

    public function render()
    {
        $this->data = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->join('profiles', 'reservations.user_id', 'profiles.user_id')
            ->join('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
            ->where('id_reservation', $this->reservation)
            ->first([
                'id_reservation', 'id_user', 'avatar', 'full_name', 'name', 'checkin', 'checkout', 'total_payout', 'booked', 'users.created_at',
                'phone', 'number_guests', 'internal_title', 'cleaning_fee', 'pet_fee', 'extra_guest_fee', 'extra_guest', 'community_fee', 'base_price', 'city', 'state', 'note',
                'location'
            ])->toArray();
        $this->data['guest_service'] = $this->data['pet_fee'] + $this->data['extra_guest'];
        $this->data['host_service_fee'] = ($this->data['cleaning_fee'] + $this->data['total_payout']) * 3 / 100;

        $this->data['total_paid_you'] = $this->data['total_payout'] + $this->data['cleaning_fee'] - $this->data['host_service_fee'];
        $this->data['occupancy_taxes'] = 0;
        // $this->data['photo'] = json_decode($this->data['photos'])[0]->name;
        $date_init = Carbon::parse($this->data['checkin']);

        $date_end = Carbon::parse($this->data['checkout']);

        $fechaInicio = strtotime($date_init);
        $fechaFin = strtotime($date_end);

        for ($i = $fechaInicio; $i < $fechaFin; $i += 86400) {
            $arr_date[] = date("Y-m-d", $i);
        }
        $this->data['total_days'] = count($arr_date);

        if (($date_end->format('m') - $date_init->format('m')) == 0) {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                $date_end->format('d');
        } else {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                $date_end->format('M') . ' ' . $date_end->format('d');
        }

        $this->data['arriving'] = $date_init->format('d') - now()->format('d');
        $this->data['created_at'] = Carbon::parse($this->data['created_at'])->isoFormat('MMMM Y');
        $this->data['checkin'] = Carbon::parse($this->data['checkin'])->isoFormat('ddd, MMM D');
        $this->data['checkout'] = Carbon::parse($this->data['checkout'])->isoFormat('ddd, MMM D');
        $this->data['booked'] = Carbon::parse($this->data['booked'])->isoFormat('ddd, MMM D, Y');

        return view('livewire.reservations.show-reservation');
    }

    public function saveNote(){
        Reservation::where('id_reservation', $this->data['id_reservation'])->update(['note' => $this->note]);
        $reservation = Reservation::where('id_reservation', $this->data['id_reservation'])->first()->toArray();
    }
}
