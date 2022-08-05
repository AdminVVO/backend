<?php

namespace App\Http\Livewire\Listing\Details\Discount;

use App\Models\Listing\ListingPricing;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingOtherStays extends Component
{
    use LivewireAlert;

    public $listingId;
    public $stays;

    /* Variables para Add Inputs Discount Stays*/
    public $inputs = [];
    public $i = 1;
    public $inputStays = [];
    public $inputStaysDiscount = [];
    public $disableAdd = false;

    public function mount()
    {
        $this->loadInputs(); 
    }

    public function loadInputs()
    {
        $this->reset(['inputStays', 'inputStaysDiscount','inputs','disableAdd','i']);

        if ( count( $this->stays ) != 0 ) {
            $this->i = 5;
            foreach ( $this->stays as $key => $value) {
                array_push($this->inputs , $key );
                $this->inputStays[ $key ] = $value['type'];
                $this->inputStaysDiscount[ $key ] = $value['discont'];
            }
                if ( count( $this->inputs ) >= 3 )
                    $this->disableAdd = true;
        }

        if ( count( $this->inputStays ) == 0 ){
            array_push($this->inputs ,0);
            $this->inputStays[ 0 ] = '';
            $this->inputStaysDiscount[ 0 ] = '';
        }
    }


    public function render()
    {
        return view('livewire.listing.details.discount.listing-other-stays');
    }

    public function reloadInputs()
    {
        $this->loadInputs();    
    }

    public function reloadInputsInvers($paylaod)
    {
        $this->stays = $paylaod;
    }

    public function SubmitStays()
    {      
        $this->resetValidation();    
        
        $validation = Validator::make([
           'inputStays'           => $this->inputStays,
           'inputStaysDiscount'   => $this->inputStaysDiscount,
        ],[
            'inputStays.*'           => 'required|in:Weekly (1 week),Monthly (4 weeks),8 weeks,12 weeks',
            'inputStaysDiscount.*'   => 'required|integer|min:10|max:100|digits_between:0,2',
        ]);

            if ($validation->fails())
                $validation->validate();

        $content = [];
        if ( count( $this->inputStays ) != 0 ) {
            $itera = 0;
            foreach ($this->inputStays as $key => $value) {
                $content[ $itera ]['type'] = $value;
                $content[ $itera ]['discont'] = $this->inputStaysDiscount[ $key ];
                $itera++;
            }
        }

        if ( count( $this->inputStays ) == 0 ) {
            array_push($this->inputs ,0);
            $this->inputStays[ 0 ] = '';
            $this->inputStaysDiscount[ 0 ] = '';
        }

        ListingPricing::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'other_discount_array' => $content,
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'discont');
        $this->reloadInputsInvers($content);
        $this->alert('success', 'Update has been successful!');
    }

    public function addInputs($i)
    {
        if ( $this->disableAdd )
            return;

        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
        $this->inputStays[ $i ] = '';
        $this->inputStaysDiscount[ $i ] = '';
        if ( count( $this->inputs ) >= 3 )
            $this->disableAdd = true;

    }

    public function removeInputs($i)
    {
        $index = '';
        foreach ( $this->inputs as $key => $value)
            if ( $value === $i )
                $index = $key;

        unset($this->inputs[ $index ]);
        unset($this->inputStays[ $i ]);
        unset($this->inputStaysDiscount[ $i ]);

        if ( count( $this->inputs ) <= 2 )
            $this->disableAdd = false;
    }
}
