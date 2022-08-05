<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Carbon;

class InternaFormReserve extends Component
{
    use LivewireAlert;

    public $listingId;
    public $base_price;
    public $first_guest;
    public $base_descont;
    public $number_guests;
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
    public $requestDate;
    public $requestDays;
    public $max_people;
    public $extra_guest_fee;
    public $extra_guest;
    public $extra_guestShow = 0;


    public $inputDateIn;
    public $inputDateOut;
    public $inputGuest;

    protected $listeners = [
        'selectDate' => 'selectDate'
    ];
    
    public function mount()
    {
        if ( isset( $this->requestDate['inputDateIn'] ) ) {
            $this->inputDateIn = Carbon::createFromDate( $this->requestDate['inputDateIn'] )->format('d M Y');
            $this->inputDateOut = Carbon::createFromDate( $this->requestDate['inputDateOut'] )->format('d M Y');
        }

        if ( $this->first_guest ) {
            $this->base_descont = $this->base_price;
            $mult = $this->base_price * 0.20;
            $this->base_price = $this->base_price - $mult;
        }

        if ( $this->resort_type == 'porcent' )
            $this->resort_fee = $this->resort_fee != null ? number_format( $this->base_price *  $this->resort_fee/100) : null;

        if ( $this->management_type == 'porcent' )
            $this->management_fee = $this->management_fee != null ? number_format( $this->base_price *  $this->management_fee/100) : null;
        
        if ( $this->community_type == 'porcent' )
            $this->community_fee = $this->community_fee != null ? number_format( $this->base_price *  $this->community_fee/100) : null;

        $this->inputGuest = $this->number_guests;

        if ( $this->requestDays == 0 )
            $this->requestDays = 1;
    }
 
    public function updatingInputGuest($value)
    {
        $this->extra_guestShow = ( $value - $this->number_guests ) * $this->extra_guest_fee;
    }
    
    public function render()
    {
        $this->totalPrice = ( $this->base_price * $this->requestDays - $this->weekly_discount - $this->monthly_discount ) + $this->cleaning_fee + $this->pet_fee + $this->linens_fee + $this->resort_fee + $this->management_fee + $this->community_fee + $this->extra_guestShow;

        return view('livewire.interna.interna-form-reserve');
    }
    
    public function selectDate($payload)
    {
        $this->inputDateIn = Carbon::createFromDate( $payload[0] )->format('d-m-Y');
        $this->inputDateOut = Carbon::createFromDate( $payload[1] )->format('d-m-Y');
        $daysDiffs = Carbon::createFromDate( $payload[0] )->diff( $payload[1] );
        $this->requestDays = $daysDiffs->days + 1;
        $this->dispatchBrowserEvent('reloadDateInputs', [
            'inputDateIn' => $payload[0],
            'inputDateOut' => $payload[1],
        ]);
    }
    
    public function submitReserveForm()
    {
        if ( $this->inputDateIn == null && $this->inputDateIn == null )
            return $this->alert('warning', 'Arrival and departure date not selected!');

        $this->emitTo('interna.interna-confirm-pay', 'ExtraShow', $this->extra_guestShow);
        $this->dispatchBrowserEvent('OpenModalPayment');
    }
}
