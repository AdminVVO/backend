<?php

namespace App\Http\Livewire\ReservationHost;

use Livewire\Component;

class PopupOptions extends Component
{
    public $contentReservPopup;

    protected $listeners = [
        'contentPopupReserv' => 'contentPopupReserv',
    ];

    public function render()
    {
        return view('livewire.reservation-host.popup-options');
    }
    
    public function contentPopupReserv( $payload )
    {
        $this->reset(['contentReservPopup']);

        $this->contentReservPopup = [
            'status' => $payload['status'],
            'statusBar' => $payload['statusBar'],
            'reservation' => $payload['reservation'],
            'listing' => $payload['listing'],
            'code_reservation' => $payload['code_reservation'],
            'phone' => $payload['phone'],
        ];
    }
    
    public function confirmReservation( $payload )
    {
        $this->emitTo('reservation-host.index','confirmReservation', $payload);
    }
}