<?php

namespace App\Http\Livewire\ReservationHost;

use Livewire\Component;
use Carbon;

class Details extends Component
{
    public $contentDetails = [
        'listing' => null,
        'user' => null,
        'avatar' => 'user.png',
        'name' => null,
        'nights' => null,
        'title' => null,
        'status' => null,
        'amount_total' => null,
        'date_in' => null,
        'date_out' => null,
        'joiner' => null,
        'phone' => null,
        'location_user' => null,
        'code_reservation' => null,
        'booking' => null,
        'guest' => [],
        'services' => [],
    ];
    public $status = false;

    protected $listeners = [
        'infoDetail' => 'infoDetail',
    ];

    public function render()
    {
        return view('livewire.reservation-host.details');
    }

    public function infoDetail( $payload )
    {
        dd($payload);
        $this->contentDetails['listing'] = $payload['listing_id'];
        $this->contentDetails['user'] = $payload['user_id'];
        $this->contentDetails['avatar'] = $payload['user']['avatar'];
        $this->contentDetails['name'] = $payload['user']['name'];
        $this->contentDetails['nights'] = $payload['services']['nights'];
        $this->contentDetails['title'] = $payload['listings']['title'];
        $this->contentDetails['amount_total'] = $payload['total_amount'];
        $this->contentDetails['status'] = $payload['status_reserv']['name'];

        $this->contentDetails['date_in'] = $payload['date_in'];
        $this->contentDetails['date_out'] = $payload['date_out'];
        $this->contentDetails['joiner'] = $payload['user']['created_at'];
        $this->contentDetails['phone'] = $payload['user']['phone'];
        $this->contentDetails['location_user'] = $payload['profile']['location'];

        $this->contentDetails['code_reservation'] = $payload['code_reservation'];
        $this->contentDetails['booking'] = $payload['created_at'];
        $this->contentDetails['guest'] = $payload['guest'];
        $this->contentDetails['services'] = $payload['services'];




    }
}
