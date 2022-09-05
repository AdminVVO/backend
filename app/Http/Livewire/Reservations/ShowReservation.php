<?php

namespace App\Http\Livewire\Reservations;

use App\Models\Profile;
use App\Models\Reservation;
use App\Models\ReservationUser;
use Carbon\Carbon;
use Livewire\Component;

class ShowReservation extends Component
{
    public $reservation;
    public $data = [];
    public $note = '';

    public function preLoad()
    {
        $this->data = ReservationUser::join('users', 'reservation_users.user_id', 'users.id_user')
            ->join('listings', 'reservation_users.listing_id', 'listings.id_listings')
            ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->join('listing_locations', 'reservation_users.listing_id', 'listing_locations.listing_id')
            ->where('id_reservation_users', $this->reservation)
            ->first([
                'id_reservation_users','code_reservation', 'id_user', 'avatar', 'full_name', 'name', 'date_in', 'date_out', 'total_amount', 'reservation_users.created_at',
                'phone', 'number_guests', 'internal_title', 'base_price', 'city', 'state', 'private_note', 'cleaning_fee', 'pet_fee', 'linens_fee', 'resort_fee', 'management_fee', 'community_fee', 'extra_guest_fee', 'extra_guest', 'weekend_nightly_fee'
            ])->toArray();


            $location = Profile::where('user_id', $this->data['id_user'])->first('location');
            $this->data['location'] = $location['location'] ?? '';
            $this->data['general_fee'] = $this->data['cleaning_fee'] + $this->data['pet_fee'] +
            $this->data['linens_fee'] + $this->data['resort_fee'] +
            $this->data['management_fee'] + $this->data['community_fee'] +
            $this->data['extra_guest_fee'] + $this->data['weekend_nightly_fee'];
        $this->data['total_paid_by_guest'] = $this->data['general_fee'] + $this->data['total_amount'];

        $this->data['host_service_fee'] = ($this->data['general_fee'] + $this->data['total_amount']) * 15 / 100;
        $this->data['total_paid_you'] = $this->data['total_amount'] + $this->data['general_fee'] - $this->data['host_service_fee'];

        // $this->data['photo'] = json_decode($this->data['photos'])[0]->name;
        $date_init = Carbon::parse($this->data['date_in']);

        $date_end = Carbon::parse($this->data['date_out']);

        $fechaInicio = strtotime($date_init);
        $fechaFin = strtotime($date_end);

        for ($i = $fechaInicio; $i < $fechaFin; $i += 86400) {
            $arr_date[] = date("Y-m-d", $i);
        }
        $this->data['total_days'] = count($arr_date);

        if (($date_end->format('m') - $date_init->format('m')) == 0) {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                ($date_end->format('d')-1);
        } else {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                $date_end->format('M') . ' ' . ($date_end->format('d')-1);
        }
        
        $day = (new Carbon(now()))->diff($date_init)->format("%r%a");
        $day_dif = $day >= 0 ? 'Arriving in ' . $day . ' days ' : '';

        $this->data['arriving'] = $day_dif;
        $this->data['created_at'] = Carbon::parse($this->data['created_at'])->isoFormat('MMMM Y');
        $this->data['date_in'] = Carbon::parse($this->data['date_in'])->isoFormat('ddd, MMM D');
        $this->data['date_out'] = $date_end->isoFormat('ddd, MMM') . ' ' . ($date_end->isoFormat('D')-1);
        $this->data['booked'] = Carbon::parse($this->data['created_at'])->isoFormat('ddd, MMM D, Y');
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.reservations.show-reservation');
    }

    public function saveNote()
    {
        ReservationUser::where('id_reservation_users', $this->data['id_reservation_users'])->update(['private_note' => $this->note]);
        $this->data['note'] = ReservationUser::where('id_reservation_users', $this->data['id_reservation_users'])->first('private_note')->toArray()['private_note'];
    }
}
