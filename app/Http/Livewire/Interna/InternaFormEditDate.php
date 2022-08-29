<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;
use Carbon;

class InternaFormEditDate extends Component
{
    public $requestDate;
    public $daysDiffs;

    protected $listeners = [
        'reloadDateEdit' => 'reloadDateEdit'
    ];

    public function render()
    {
        return view('livewire.interna.interna-form-edit-date');
    }

    public function mount()
    {
        $daysDiffs = Carbon::createFromDate( $this->requestDate['inputDateIn'] )->diff( $this->requestDate['inputDateOut'] );
        $this->daysDiffs = $daysDiffs->days;
    }

    public function reloadDateEdit($payload)
    {
        $daysDiffs = Carbon::createFromDate( $payload[0] )->diff( $payload[1] );
        $this->daysDiffs = $daysDiffs->days;
    }
}
