<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;
use Carbon;

class InternaConfirmPay extends Component
{
    public $listingId;
    public $title;
    public $photos;
    public $like_place;
    public $property_type;
    public $guest_access;
    public $bed;
    public $bedrooms;
    public $bathrooms;
    public $base_price;
    public $listing_currency;
    public $weekly_discount;
    public $monthly_discount;
    public $cleaning_fee;
    public $pet_fee;
    public $linens_fee;
    public $resort_fee;
    public $resort_type;
    public $management_fee;
    public $management_type;
    public $community_fee;
    public $community_type;
    public $totalPrice;
    public $inputDateIn;
    public $inputDateOut;
    public $requestDate;
    public $requestDays;

    protected $listeners = [
        'selectDate' => 'selectDate'
    ];

    public function mount()
    {
        $this->inputDateIn = Carbon::createFromDate( $this->requestDate['inputDateIn'] )->format('d M Y');
        $this->inputDateOut = Carbon::createFromDate( $this->requestDate['inputDateOut'] )->format('d M Y');

        if ( $this->resort_type == 'porcent' )
            $this->resort_fee = $this->resort_fee != null ? number_format( $this->base_price *  $this->resort_fee/100) : null;

        if ( $this->management_type == 'porcent' )
            $this->management_fee = $this->management_fee != null ? number_format( $this->base_price *  $this->management_fee/100) : null;
        
        if ( $this->community_type == 'porcent' )
            $this->community_fee = $this->community_fee != null ? number_format( $this->base_price *  $this->community_fee/100) : null;

    }

    public function render()
    {
        $this->totalPrice = ( $this->base_price * $this->requestDays - $this->weekly_discount - $this->monthly_discount ) + $this->cleaning_fee + $this->pet_fee + $this->linens_fee + $this->resort_fee + $this->management_fee + $this->community_fee;

        return view('livewire.interna.interna-confirm-pay');
    }
    
    public function selectDate($payload)
    {
        $this->inputDateIn = Carbon::createFromDate( $payload[0] )->format('d M Y');
        $this->inputDateOut = Carbon::createFromDate( $payload[1] )->format('d M Y');
        $daysDiffs = Carbon::createFromDate( $payload[0] )->diff( $payload[1] );
        $this->requestDays = $daysDiffs->days + 1;
        $this->dispatchBrowserEvent('reloadDateInputs', [
            'inputDateIn' => $payload[0],
            'inputDateOut' => $payload[1],
        ]);
    }
}
