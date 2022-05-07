<?php

namespace App\Http\Livewire\Reservations;

use App\Models\ReservationForm;
use Livewire\Component;

class ReservationFormAll extends Component
{
    public $reservations;

    public function mount()
    {
        $this->reservations = ReservationForm::select(
            'id_reservation_forms',
            'vvo_confirm',
            'resort_confirm',
            'costumb_name',
            'request as email',
            'phone',
            'checkin',
            'checkout',
            'date'
        )->whereNotNull('vvo_confirm')->get();
    }

    public function render()
    {
        return view('livewire.reservations.reservation-form-all');
    }
}