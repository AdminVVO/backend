<?php

namespace App\Http\Livewire\Interna;

use App\Models\Listing\Listings;
use App\Models\ReservationUser;
use Auth;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

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
    public $pets_allowed;
    public $linens_fee;
    public $resort_fee;
        public $resort_type;
    public $management_fee;
        public $management_type;
    public $community_fee;
        public $community_type;
    public $extra_guest_fee;
        public $extra_guest;
    public $oneListing = false;
        public $inputOneListing;
    
    public $requestDate;
    public $requestDays;


    public $inputBase;
    public $inputDateIn;
    public $inputDateOut;
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
        'editGuestSubmit' => 'editGuestSubmit'
    ];

    public function mount()
    {        
        if ( isset( $this->requestDate['inputDateIn'] ) ) {
            $this->inputDateIn = Carbon::createFromDate( $this->requestDate['inputDateIn'] )->format('d M Y');
            $this->inputDateOut = Carbon::createFromDate( $this->requestDate['inputDateOut'] )->format('d M Y');
        }

        $this->inputGuest = $this->maxGuest . ' Guest';
        
        if ( ReservationUser::where([ 'user_id' => Auth::id() ])->exists() )
            $this->oneListing = true;

        $this->servicesApply();
    }

    public function servicesApply()
    {
        if ( $this->first_guest ) {
            $this->base_descont = $this->base_price;
            $mult = $this->base_price * 0.20;
                $this->inputBase = $this->base_price - $mult;
        }

        if ( $this->oneListing ){
            $mult = $this->inputBase * 0.10;
                $this->inputOneListing = $this->inputBase - $mult;
        }

        if ( $this->resort_type == 'porcent' )
            $this->resort_fee = $this->resort_fee != null ? number_format( $this->inputBase *  $this->resort_fee/100) : 0;

        if ( $this->management_type == 'porcent' )
            $this->management_fee = $this->management_fee != null ? number_format( $this->inputBase *  $this->management_fee/100) : 0;
        
        if ( $this->community_type == 'porcent' )
            $this->community_fee = $this->community_fee != null ? number_format( $this->inputBase *  $this->community_fee/100) : 0;

        if ( ( $this->weekly_discount != 0 || $this->monthly_discount != 0 ) && $this->requestDays >= 7 ) {
            if ( $this->monthly_discount != 0 ) {
                $this->monthlyTotal = round(( $this->inputBase * $this->requestDays ) * ( $this->monthly_discount /100 ) );
            } else {
                $this->weeklyTotal = round(( $this->inputBase * $this->requestDays ) * ( $this->weekly_discount /100 ) );
            }
        }
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

        $this->changeGuestInput();
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

        $this->changeGuestInput();
    }

    public function changeGuestInput()
    {
        $this->reset(['inputGuest']);

        $this->emitTo('interna.interna-confirm-pay', 'ExtraShow', [
            'inputAdult' => $this->inputAdult,
            'inputKids' => $this->inputKids,
            'inputInfant' => $this->inputInfant,
            'inputPets' => $this->inputPets,
        ]);

        $this->emitTo('interna.interna-guest-edit', 'showGuestEdit', [
            'inputAdult' => $this->inputAdult,
            'inputKids' => $this->inputKids,
            'inputInfant' => $this->inputInfant,
            'inputPets' => $this->inputPets,
        ]);

        $this->maxGuest = $this->inputAdult + $this->inputKids;

        $this->inputGuest = $this->inputAdult . ' Guest';

            if ( $this->inputKids != 0 )
                $this->inputGuest = $this->inputGuest . ', ' . $this->inputKids . ' Children';

            if ( $this->inputInfant != 0 )
                $this->inputGuest = $this->inputGuest . ', ' . $this->inputInfant . ' Infants';
            
            if ( $this->inputPets != 0 )
                $this->inputGuest = $this->inputGuest . ', ' . $this->inputPets . ' Pets';
    }

    public function editGuestSubmit($payload)
    {
        $this->inputAdult = $payload['inputAdult'];
        $this->inputKids = $payload['inputKids'];
        $this->inputInfant = $payload['inputInfant'];
        $this->inputPets = $payload['inputPets'];

        $this->changeGuestInput();
    }
 
    public function render()
    {
        $a = $this->inputBase * $this->requestDays - $this->weeklyTotal - $this->monthlyTotal;
        $b = $this->cleaning_fee + $this->linens_fee + $this->resort_fee + $this->management_fee + $this->community_fee;

        $c = 0;
        if ( $this->inputPets != 0 && $this->pets_allowed )
            $c = $this->pet_fee * $this->inputPets;

        $d = 0;
        if ( $this->maxGuest > 1 )
            $d = $this->extra_guest_fee * ( $this->maxGuest - 1 );

        $e = 0;
        if ( $this->oneListing )
            $e = $this->inputOneListing;

        $this->totalPrice = $a + $b + $c + $d + $e;

        return view('livewire.interna.interna-form-reserve');
    }
    
    public function selectDate($payload)
    {
        $this->inputDateIn = Carbon::createFromDate( $payload[0] )->format('d-m-Y');
        $this->inputDateOut = Carbon::createFromDate( $payload[1] )->format('d-m-Y');
        $daysDiffs = Carbon::createFromDate( $payload[0] )->diff( $payload[1] );
        $this->requestDays = $daysDiffs->days;
        $this->dispatchBrowserEvent('reloadDateInputs', [
            'inputDateIn' => $payload[0],
            'inputDateOut' => $payload[1],
        ]);
    }
    
    public function submitReserveForm()
    {
        if ( $this->inputDateIn == null && $this->inputDateIn == null )
            return $this->alert('warning', 'Arrival and departure date not selected!');

        $this->dispatchBrowserEvent('createOrder');
        $this->dispatchBrowserEvent('OpenModalPayment');
    }
}

