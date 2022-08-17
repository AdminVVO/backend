<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\Listing\ListingPricing;
use Livewire\Component;
use Auth;

class PreviewGuest extends Component
{
    public $listingId;
    public $inputNight = 1;
    public $inputServic = 3;
    public $inputPets = 0;
    public $inputGuest = [
        'adult' => 1,
        'children' => 0,
        'infant' => 0,
    ];
    public $inputNightEnd = 1;
    public $inputGuestEnd = 1;
    public $inputPetsEnd = 0;

    public $weeklyTotal = 0;
    public $monthlyTotal = 0;
    public $guestServTotal = 0;
    public $guestTotal = 0;
    public $petsTotal = 0;
    public $totalReview = 0;


    public $contentPricing = [];

    public function render()
    {
        $this->contentPricing = ListingPricing::select(
            'base_price',
            'listing_currency',
            'max_people',
            'extra_guest_fee',
            'extra_guest',
            'weekly_discount',
            'monthly_discount',
            'pet_fee',
        )->where([
            'listing_id' => $this->listingId,
            'user_id'     => Auth::id()
        ])->first();

        $this->reset(['weeklyTotal','monthlyTotal','guestTotal','petsTotal','totalReview']);

        if ( $this->inputNight == 7 )
            $this->weeklyTotal = round(( $this->contentPricing['base_price'] * $this->inputNight ) * ( $this->contentPricing['weekly_discount'] /100 ) );

        if ( $this->inputNight == 28 )
            $this->monthlyTotal = round(( $this->contentPricing['base_price'] * $this->inputNight ) * ( $this->contentPricing['monthly_discount'] /100 ) );

            $this->guestTotal = round( $this->contentPricing['extra_guest_fee'] * ( $this->inputGuestEnd - 1 ) );

            $this->petsTotal = round( $this->contentPricing['pet_fee'] * $this->inputPetsEnd );

            $this->guestServTotal = round( $this->inputNight * $this->inputServic );


            $this->totalReview = round( $this->contentPricing['base_price'] * $this->inputNight + $this->guestTotal + $this->petsTotal - $this->monthlyTotal - $this->weeklyTotal + $this->guestServTotal );






        return view('livewire.listing.details.preview-guest');
    }

    public function buttonDecrease($paylaod)
    {
        if ( $paylaod === 'adult' ) 
            $this->inputGuest[ $paylaod ] -= 1;

        if ( $paylaod === 'children' ) 
            $this->inputGuest[ $paylaod ] -= 1;

        if ( $paylaod === 'infant' ) 
            $this->inputGuest[ $paylaod ] -= 1;

        if ( $paylaod === 'pets' ) 
            $this->inputPets -= 1;

    }

    public function buttonIncrease($paylaod)
    {
        if ( $paylaod === 'adult' ) 
            $this->inputGuest[ $paylaod ] += 1;

        if ( $paylaod === 'children' ) 
            $this->inputGuest[ $paylaod ] += 1;
        
        if ( $paylaod === 'infant' ) 
            $this->inputGuest[ $paylaod ] += 1;
        
        if ( $paylaod === 'pets' ) 
            $this->inputPets += 1;
    }

    public function Apply($paylaod)
    {
        if ( $paylaod === 'guest' ) {
            $this->inputGuestEnd = $this->inputGuest['adult'] + $this->inputGuest['children'];
        }
        if ( $paylaod === 'pets' )
            $this->inputPetsEnd = $this->inputPets;

    }
}
