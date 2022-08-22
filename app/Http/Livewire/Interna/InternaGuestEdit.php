<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;

class InternaGuestEdit extends Component
{
    public $number_guests;
    public $pets_allowed;
    public $maxGuest;

    public $inputAdult;
    public $inputKids;
    public $inputInfant;
    public $inputPets;

    protected $listeners = [
        'showGuestEdit' => 'showGuestEdit'
    ];

    public function render()
    {
        $this->maxGuest = $this->inputAdult + $this->inputKids;
        return view('livewire.interna.interna-guest-edit');
    }

    public function showGuestEdit($payload)
    {
        $this->inputAdult = $payload['inputAdult'];
        $this->inputKids = $payload['inputKids'];
        $this->inputInfant = $payload['inputInfant'];
        $this->inputPets = $payload['inputPets'];
    }

    public function buttonIncrease($paylaod)
    {
        if ( $paylaod === 'adult' )
            $this->inputAdult = $this->inputAdult + 1;

        if ( $paylaod === 'kids' )
            $this->inputKids = $this->inputKids + 1;

        if ( $paylaod === 'infant' )
            $this->inputInfant = $this->inputInfant + 1;

        if ( $paylaod === 'pets' )
            $this->inputPets = $this->inputPets + 1;
    }

    public function buttonDecrease($paylaod)
    {
        if ( $paylaod === 'adult' )
            $this->inputAdult = $this->inputAdult - 1;

        if ( $paylaod === 'kids' )
            $this->inputKids = $this->inputKids - 1;

        if ( $paylaod === 'infant' )
            $this->inputInfant = $this->inputInfant - 1;

        if ( $paylaod === 'pets' )
            $this->inputPets = $this->inputPets - 1;
    }

    public function submitEditGuest()
    {
        $this->emitTo('interna.interna-confirm-pay', 'editGuestSubmit', [
            'inputAdult' => $this->inputAdult,
            'inputKids' => $this->inputKids,
            'inputInfant' => $this->inputInfant,
            'inputPets' => $this->inputPets,
        ]);
        
        $this->emitTo('interna.interna-form-reserve', 'editGuestSubmit', [
            'inputAdult' => $this->inputAdult,
            'inputKids' => $this->inputKids,
            'inputInfant' => $this->inputInfant,
            'inputPets' => $this->inputPets,
        ]);
    }
}
