<?php

namespace App\Http\Livewire\Reservations;

use App\Http\Controllers\SendMailController;
use App\Models\ReservationForm;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ReservationFormPreview extends Component
{
    use LivewireAlert;

    public $contentReserv = [];

    public function mount($reservation)
    {
        $query = ReservationForm::select(
            'id_reservation_forms',
            'vvo_confirm',
            'resort_confirm',
            'date',
            'request',
            'name_site',
            'costumb_name',
            'spouse_name',
            'address',
            'city',
            'state_address',
            'zip_code',
            'phone',
            'occupation',
            'spouse_occupation',
            'status_marital',
            'ages',
            'combine_amount',
            'type_card',
            'room_type',
            'guest_number',
            'checkin',
            'checkout',
            'in_party',
            'of_night',
            'preferenc_tour',
            'gifting',
            'template',
            'resort_confirm',
            'comment',
            'tour_date',
        )
        ->where([
            'id_reservation_forms' => $reservation 
        ])
        ->first();

            $this->contentReserv['id_reservation_forms'] = $query['id_reservation_forms'];
            $this->contentReserv['vvo_confirm'] = $query['vvo_confirm'];
            $this->contentReserv['resort_confirm'] = $query['resort_confirm'];
            $this->contentReserv['date'] = $query['date'];
            $this->contentReserv['name_site'] = $query['name_site'];
            $this->contentReserv['costumb_name'] = $query['costumb_name'];
            $this->contentReserv['spouse_name'] = $query['spouse_name'];
            $this->contentReserv['address'] = $query['address'];
            $this->contentReserv['phone'] = $query['phone'];
            $this->contentReserv['occupation'] = $query['occupation'];
            $this->contentReserv['spouse_occupation'] = $query['spouse_occupation'];
            $this->contentReserv['status_marital'] = $query['status_marital'];
            $this->contentReserv['ages'] = $query['ages'];
            $this->contentReserv['combine_amount'] = $query['combine_amount'];
            $this->contentReserv['type_card'] = $query['type_card'];
            $this->contentReserv['guest_number'] = $query['guest_number'];
            $this->contentReserv['checkin'] = $query['checkin'];
            $this->contentReserv['checkout'] = $query['checkout'];
            $this->contentReserv['template'] = $query['template'];
            $this->contentReserv['resort_confirm'] = $query['resort_confirm'];
            $this->contentReserv['comment'] = $query['comment'];
            $this->contentReserv['tour_date'] = $query['tour_date'];

                if ( $query['template'] === 'MS Code' ) {
                    $this->contentReserv['in_party'] = $query['in_party'];
                    $this->contentReserv['of_night'] = $query['of_night'];
                    $this->contentReserv['preferenc_tour'] = $query['preferenc_tour'];
                    $this->contentReserv['gifting'] = $query['gifting'];
                }

                if ( $query['template'] !== 'MS Code' ) {
                    $this->contentReserv['request'] = $query['request'];
                    $this->contentReserv['room_type'] = $query['room_type'];
                    $this->contentReserv['city'] = $query['city'];
                    $this->contentReserv['state_address'] = $query['state_address'];
                    $this->contentReserv['zip_code'] = $query['zip_code'];
                }
    }

    public function render()
    {
        return view('livewire.reservations.reservation-form-preview');
    }

    public function sendEmailResort()
    {
        SendMailController::sendMessageResort( $this->contentReserv['id_reservation_forms'] );
            $this->alert('success', 'The reservation has been sent!');
    }
}
