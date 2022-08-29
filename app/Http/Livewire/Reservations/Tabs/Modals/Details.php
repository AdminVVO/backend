<?php

namespace App\Http\Livewire\Reservations\Tabs\Modals;

use App\Models\Address;
use App\Models\Profile;
use App\Models\Reservation;
use Livewire\Component;
use Carbon\Carbon;

class Details extends Component
{
    public $reservation = '';
    public $data = [];
    public $note = '';

    protected $listeners = [
        'refreshReservation' => 'refreshReservation'
    ];
    
    public function refreshReservation($data) {
        $this->reservation = $data;
    }

    public function preLoad()
    {
        $this->reset('data');

        if($this->reservation == '')  {
            $this->data = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->join('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
            ->first([
                'id_reservation', 'id_user', 'avatar', 'full_name', 'name', 'checkin', 'checkout', 'total_payout', 'booked', 'users.created_at',
                'phone', 'number_guests', 'internal_title', 'base_price', 'city', 'state', 'note',
                'location', 'cleaning_fee', 'pet_fee', 'linens_fee', 'resort_fee', 'management_fee', 'community_fee', 'extra_guest_fee', 'extra_guest', 'weekend_nightly_fee'
            ])->toArray();
        } else {
        $this->data = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->join('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
            ->where('id_reservation', $this->reservation)
            ->first([
                'id_reservation', 'id_user', 'avatar', 'full_name', 'name', 'checkin', 'checkout', 'total_payout', 'booked', 'users.created_at',
                'phone', 'number_guests', 'internal_title', 'base_price', 'city', 'state', 'note',
                'location', 'cleaning_fee', 'pet_fee', 'linens_fee', 'resort_fee', 'management_fee', 'community_fee', 'extra_guest_fee', 'extra_guest', 'weekend_nightly_fee'
            ])->toArray();
        }

        $location = Profile::where('user_id', $this->data['id_user'])->first('location');
        $this->data['location'] = $location['location'] ?? '';
        $this->data['general_fee'] = $this->data['cleaning_fee'] + $this->data['pet_fee'] +
            $this->data['linens_fee'] + $this->data['resort_fee'] +
            $this->data['management_fee'] + $this->data['community_fee'] +
            $this->data['extra_guest_fee'] + $this->data['weekend_nightly_fee'];
        $this->data['total_paid_by_guest'] = $this->data['general_fee'] + $this->data['total_payout'];

        $this->data['host_service_fee'] = ($this->data['general_fee'] + $this->data['total_payout']) * 15 / 100;
        $this->data['total_paid_you'] = $this->data['total_payout'] + $this->data['general_fee'] - $this->data['host_service_fee'];

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
                ($date_end->format('d')-1);
        } else {
            $this->data['total_date'] = $date_init->format('M') . ' ' . $date_init->format('d') . ' - ' .
                $date_end->format('M') . ' ' . ($date_end->format('d')-1);
        }
        
        $day = (new Carbon(now()))->diff($date_init)->format("%r%a");
        $day_dif = $day >= 0 ? 'Arriving in ' . $day . ' days ' : '';

        $this->data['arriving'] = $day_dif;
        $this->data['created_at'] = Carbon::parse($this->data['created_at'])->isoFormat('MMMM Y');
        $this->data['checkin'] = Carbon::parse($this->data['checkin'])->isoFormat('ddd, MMM D');
        $this->data['checkout'] = $date_end->isoFormat('ddd, MMM') . ' ' . ($date_end->isoFormat('D')-1);
        $this->data['booked'] = Carbon::parse($this->data['booked'])->isoFormat('ddd, MMM D, Y');
    }
    
    public function render()
    {
        $this->preLoad();
        return view('livewire.reservations.tabs.modals.details');
    }

    public function saveNote()
    {
        Reservation::where('id_reservation', $this->data['id_reservation'])->update(['note' => $this->note]);
        $this->data['note'] = Reservation::where('id_reservation', $this->data['id_reservation'])->first('note')->toArray()['note'];
    }

}
