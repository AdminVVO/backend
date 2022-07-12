<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;
use Carbon;

class InternaDateCalendar extends Component
{
    public $requestDays;

    protected $listeners = [
        'selectDate' => 'selectDate'
    ];

    public function render()
    {
        return view('livewire.interna.interna-date-calendar');
    }

    public function selectDate($payload)
    {
        $daysDiffs = Carbon::createFromDate( $payload[0] )->diff( $payload[1] );
        $this->requestDays = $daysDiffs->days + 1;
    }
}
