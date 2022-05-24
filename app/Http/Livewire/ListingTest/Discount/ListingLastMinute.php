<?php

namespace App\Http\Livewire\ListingTest\Discount;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingLastMinute extends Component
{
    use LivewireAlert;

    public $listingId;
    public $lastminute;

    /* Variables para Add Inputs LastMin Discount*/
    public $inputsLast = [];
    public $iLast = 1;
    public $inputLast = [];
    public $inputLastDiscount = [];
    public $disableAddLast = false;

    public function mount()
    {
        $this->loadInputs(); 
    }

    public function loadInputs()
    {
        $this->reset(['inputLast', 'inputLastDiscount','inputsLast','disableAddLast','iLast']);

        if ( count( $this->lastminute ) != 0 ) {
            $this->iLast = 5;
            foreach ( $this->lastminute as $key => $value) {
                array_push($this->inputsLast , $key );
                $this->inputLast[ $key ] = $value['type'];
                $this->inputLastDiscount[ $key ] = $value['discont'];
            }
                if ( count( $this->inputsLast ) >= 3 )
                    $this->disableAddLast = true;
        }

        if ( count( $this->inputLast ) == 0 ){
            array_push($this->inputsLast ,0);
            $this->inputLast[ 0 ] = '';
            $this->inputLastDiscount[ 0 ] = '';
        }

    }

    public function render()
    {
        return view('livewire.listing-test.discount.listing-last-minute');
    }

    public function reloadInputs()
    {
        $this->loadInputs();    
    }

    public function reloadInputsInvers($paylaod)
    {
        $this->lastminute = $paylaod;
    }

    public function SubmitLastMinute()
    {      
        $this->resetValidation();    
        
        $validation = Validator::make([
           'inputLast'           => $this->inputLast,
           'inputLastDiscount'   => $this->inputLastDiscount,
        ],[
            'inputLast.*'           => 'required|in:0,1,2,3,4,5',
            'inputLastDiscount.*'   => 'required|integer|min:0|max:100|digits_between:0,3',
        ]);

            if ($validation->fails())
                $validation->validate();

        $content = [];
        if ( count( $this->inputLast ) != 0 ) {
            $itera = 0;
            foreach ($this->inputLast as $key => $value) {
                $content[ $itera ]['type'] = $value;
                $content[ $itera ]['discont'] = $this->inputLastDiscount[ $key ];
                $itera++;
            }
        }

        if ( count( $this->inputLast ) == 0 ){
            array_push($this->inputsLast ,0);
            $this->inputLast[ 0 ] = '';
            $this->inputLastDiscount[ 0 ] = '';
        }

        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'last_minute_discount_array' => $content,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'discont');
        $this->reloadInputsInvers($content);
        $this->alert('success', 'Update has been successful!');
    }

    public function addInputsLast($i)
    {
        if ( $this->disableAddLast )
            return;

        $i = $i + 1;
        $this->iLast = $i;
        array_push($this->inputsLast ,$i);
        $this->inputLast[ $i ] = '';
        $this->inputLastDiscount[ $i ] = '';
        if ( count( $this->inputsLast ) >= 3 )
            $this->disableAddLast = true;
    }

    public function removeInputsLast($i)
    {
        $index = '';
        foreach ( $this->inputsLast as $key => $value)
            if ( $value === $i )
                $index = $key;

        unset($this->inputsLast[ $index ]);
        unset($this->inputLast[ $i ]);
        unset($this->inputLastDiscount[ $i ]);

        if ( count( $this->inputsLast ) <= 2 )
            $this->disableAddLast = false;
    }
}
