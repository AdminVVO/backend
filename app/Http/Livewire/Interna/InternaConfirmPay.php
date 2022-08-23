<?php

namespace App\Http\Livewire\Interna;

use Livewire\Component;
use Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class InternaConfirmPay extends Component
{
    use LivewireAlert;

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
    public $extra_guest_fee;
    public $resort_fee;
    public $resort_type;
    public $management_fee;
    public $management_type;
    public $community_fee;
    public $community_type;
    public $inputDateIn;
    public $inputDateOut;
    public $requestDate;
    public $requestDays;
    public $first_guest;
    public $base_descont;
    public $number_guests;
    public $max_people;
    public $extra_guestShow = 0;

    public $inputBase;
    public $inputGuest;
    public $inputAdult = 1;
    public $inputKids = 0;
    public $inputInfant = 0;
    public $inputPets = 0;
    public $maxGuest = 1;

    public $weeklyTotal;
    public $monthlyTotal;
    public $totalPrice;

    protected $listeners = [
        'selectDate' => 'selectDate',
        'ExtraShow' => 'ExtraShow',
        'editGuestSubmit' => 'editGuestSubmit',
        'cancelPaypaEvent' => 'cancelPaypaEvent',
    ];

    public function cancelPaypaEvent()
    {
        $this->alert('warning', 'Transacctions is Cancel!');
    }

    public function mount()
    {        
        if ( isset( $this->requestDate['inputDateIn'] ) ) {
            $this->inputDateIn = Carbon::createFromDate( $this->requestDate['inputDateIn'] )->format('d M Y');
            $this->inputDateOut = Carbon::createFromDate( $this->requestDate['inputDateOut'] )->format('d M Y');
        }

        $fechaEmision = Carbon::parse( $this->inputDateIn );
$fechaExpiracion = Carbon::parse( $this->inputDateOut );

$diasDiferencia = $fechaExpiracion->diffInDays($fechaEmision);


// dd(  intval( round( $diasDiferencia / 2, 0, PHP_ROUND_HALF_DOWN ) ) );




        if ( $this->first_guest ) {
            $this->base_descont = $this->base_price;
            $mult = $this->base_price * 0.20;
            $this->inputBase = $this->base_price - $mult;
        }

        $this->weeklyTotal = round(( $this->inputBase * $this->requestDays ) * ( $this->weekly_discount /100 ) );
        $this->monthlyTotal = round(( $this->inputBase * $this->requestDays ) * ( $this->monthly_discount /100 ) );


        if ( $this->resort_type == 'porcent' )
            $this->resort_fee = $this->resort_fee != null ? number_format( $this->inputBase *  $this->resort_fee/100) : 0;

        if ( $this->management_type == 'porcent' )
            $this->management_fee = $this->management_fee != null ? number_format( $this->inputBase *  $this->management_fee/100) : 0;
        
        if ( $this->community_type == 'porcent' )
            $this->community_fee = $this->community_fee != null ? number_format( $this->inputBase *  $this->community_fee/100) : 0;

    }

    public function render()
    {
        $this->changeGuestInput();

        $a = $this->inputBase * $this->requestDays - $this->weeklyTotal - $this->monthlyTotal;
        $b = $this->cleaning_fee + $this->linens_fee + $this->resort_fee + $this->management_fee + $this->community_fee;

        $c = 0;
        if ( $this->inputPets != 0 )
            $c = $this->pet_fee * $this->inputPets;

        $d = 0;
        if ( $this->maxGuest > 1 )
            $d = $this->extra_guest_fee * ( $this->maxGuest - 1 );

        $this->totalPrice = $a + $b + $c + $d;

        return view('livewire.interna.interna-confirm-pay');
    }

    public function ExtraShow($payload)
    {
        $this->inputBase = $payload['inputBase'];
        $this->inputAdult = $payload['inputAdult'];
        $this->inputKids = $payload['inputKids'];
        $this->inputInfant = $payload['inputInfant'];
        $this->inputPets = $payload['inputPets'];
    }

    public function editGuestSubmit($payload)
    {
        $this->inputAdult = $payload['inputAdult'];
        $this->inputKids = $payload['inputKids'];
        $this->inputInfant = $payload['inputInfant'];
        $this->inputPets = $payload['inputPets'];
    }

    public function changeGuestInput()
    {
        $this->reset(['inputGuest']);

        $this->maxGuest = $this->inputAdult + $this->inputKids;

        $this->inputGuest = $this->inputAdult . ' Guest';

            if ( $this->inputKids != 0 )
                $this->inputGuest = $this->inputGuest . ', ' . $this->inputKids . ' Children';

            if ( $this->inputInfant != 0 )
                $this->inputGuest = $this->inputGuest . ', ' . $this->inputInfant . ' Infants';
            
            if ( $this->inputPets != 0 )
                $this->inputGuest = $this->inputGuest . ', ' . $this->inputPets . ' Pets';
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
