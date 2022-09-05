<?php

namespace App\Http\Livewire\Interna;

use App\Models\Listing\Listings;
use App\Models\PaymentPay;
use App\Models\ReservationUser;
use Auth;
use Str;
use Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InternaConfirmPay extends Component
{
    use LivewireAlert;

    public $listingId;
    public $listingUser;
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
    public $pets_allowed;
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

    public $oneListing = false;
        public $oneListinFee;

    public $inputPay = 0;
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
        'successPaypaEvent' => 'successPaypaEvent',
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

        $this->loadContentValues();
    }

    public function render()
    {
        return view('livewire.interna.interna-confirm-pay');
    }

    public function loadContentValues()
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

        $e = 0;
        if ( $this->oneListing )
            $e = $this->oneListinFee;

        $this->totalPrice = $a + $b + $c + $d + $e;
        $this->inputPay = $this->totalPrice;

        $this->dispatchBrowserEvent('changeAmount', [
            'amount' => $this->inputPay,
        ]);
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

        if ( ( $this->weekly_discount != 0 || $this->monthly_discount != 0 ) && $this->requestDays >= 7 ){
            if ( $this->monthly_discount != 0 ) {
                $this->monthlyTotal = round(( $this->inputBase * $this->requestDays ) * ( $this->monthly_discount /100 ) );
            } else {
                $this->weeklyTotal = round(( $this->inputBase * $this->requestDays ) * ( $this->weekly_discount /100 ) );
            }
        }
    }

    public function ExtraShow($payload)
    {
        $this->inputAdult = $payload['inputAdult'];
        $this->inputKids = $payload['inputKids'];
        $this->inputInfant = $payload['inputInfant'];
        $this->inputPets = $payload['inputPets'];

        $this->loadContentValues();
    }

    public function editGuestSubmit($payload)
    {
        $this->inputAdult = $payload['inputAdult'];
        $this->inputKids = $payload['inputKids'];
        $this->inputInfant = $payload['inputInfant'];
        $this->inputPets = $payload['inputPets'];

        $this->loadContentValues();
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
        $this->requestDays = $daysDiffs->days;
        
        $this->dispatchBrowserEvent('reloadDateInputs', [
            'inputDateIn' => $payload[0],
            'inputDateOut' => $payload[1],
        ]);

        $this->loadContentValues();
    }
 
    public function updatedinputPay($value)
    {
        $this->inputPay = $value;
        $this->dispatchBrowserEvent('changeAmount', [
            'amount' => $this->inputPay,
        ]);
    }

    public function successPaypaEvent($payload)
    {
        $PaymentPay = PaymentPay::create([
            'status' => $payload['status'],
            'order' => $payload['purchase_units'][0]['payments']['captures'][0]['id'],
            'payer_id' => $payload['payer']['payer_id'],
            'name' => $payload['purchase_units'][0]['shipping']['name']['full_name'],
            'email' => $payload['purchase_units'][0]['payee']['email_address'],
            'address' => $payload['payer']['address']['country_code'],
            'currency' => $payload['purchase_units'][0]['amount']['currency_code'],
            'amount' => $payload['purchase_units'][0]['amount']['value'],
            'user_id'  => Auth::id(),
        ]);

        $code_exist = true;
        while ($code_exist) {
            $random_code = strtoupper(Str::random(10));
            $query_if_exist = ReservationUser::where(['code_reservation' => $random_code])->get();
            ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
        }

        $servicesPay = [];
            $servicesPay['price_base'] = $this->inputBase;
            $servicesPay['nights'] = $this->requestDays;
                if ( $this->cleaning_fee != 0 )
                    $servicesPay['cleaning'] = $this->cleaning_fee;

                if ( $this->oneListing )
                    $servicesPay['guest_sevice'] = $this->oneListinFee;

                if ( ( $this->weekly_discount != 0 || $this->monthly_discount != 0 ) && $this->requestDays >= 7 ){
                    if ( $this->monthly_discount != 0 ) {
                        $servicesPay['monthly_discount'] = $this->monthlyTotal;
                    } else {
                        $servicesPay['weekly_discount'] = $this->weeklyTotal;
                    }
                }

                if ( $this->resort_fee != 0 )
                    $servicesPay['resort'] = (int)$this->resort_fee;

                if ( $this->management_fee != 0 )
                    $servicesPay['management'] = $this->management_fee;

                if ( $this->community_fee != 0 )
                    $servicesPay['community'] = $this->community_fee;

                if ( $this->linens_fee != 0 )
                    $servicesPay['linens'] = $this->linens_fee;

                if ( $this->pet_fee != 0 && $this->inputPets != 0 && $this->pets_allowed )
                    $servicesPay['pets'] = $this->pet_fee * $this->inputPets;

                if ( $this->extra_guest_fee != 0 && $this->maxGuest >= 2  )
                    $servicesPay['extra_guest'] = $this->extra_guest_fee * ( $this->maxGuest - 1 );


        $guest = [];
            $guest['total'] = $this->inputAdult + $this->inputKids;
            
            if ( $this->inputAdult != 0 )
                $guest['adult'] = $this->inputAdult;

            if ( $this->inputKids != 0 )
                $guest['kids'] = $this->inputKids;
            
            if ( $this->inputInfant != 0 )
                $guest['infant'] = $this->inputInfant;
            
            if ( $this->inputPets != 0 )
                $guest['pets'] = $this->inputPets;

        $reservation = ReservationUser::create([
            'code_reservation' => $random_code,
            'date_in' => Carbon::createFromDate( $this->inputDateIn )->format('Y-m-d H:i:s'),
            'date_out' => Carbon::createFromDate( $this->inputDateOut )->format('Y-m-d H:i:s'),
            'total_amount' => $this->totalPrice,
            'reserv_amount' => $this->inputPay,
            'services' => $servicesPay,
            'guest' => $guest,
            'payment_pay_id' => $PaymentPay->id_payment_pays,
            'listing_id' => $this->listingId,
            'user_id'  => Auth::id(),
            'user_id_listing' => $this->listingUser,
        ]);

        return redirect()->route('pending-reservation')->with([
            'reservation' => $reservation->id_reservation_users
        ]);
    }

    public function cancelPaypaEvent()
    {
        $this->alert('warning', 'Transacctions is Cancel!');
    }
}
