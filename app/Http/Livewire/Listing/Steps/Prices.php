<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Prices extends Component
{
    use LivewireAlert;

    public $price = 0;
    public $disableS = false;
    public $disableR = true;

    public function updated($name, $value)
    {
        if ( $value > 0 )
            $this->disableR = false;
    }

    public function render()
    {
        return view('livewire.listing.steps.prices');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'price' => $this->price,
        ],[
            'price' => 'required|digits_between:2,4',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must assign a price to your listing.');

        $payload = [
            'to' => 'featurs',
            'from' => 'prices',
            'content' => $this->price,
            'img' => 'featurs',
        ];
        
        $this->emitUp('next', $payload);
    }
 
    public function buttonSumar()
    {
        if ( $this->price >= 1000 )
            return;

        if ( $this->price == '' )
            $this->price = 0;

        $this->price = $this->price + 10;
        $this->disableR = false;


        if ( $this->price >= 1000 )
            $this->disableS = true;
    }
 
    public function buttonRestar()
    {
        if ( $this->price <= 0 )
            return;

        $this->price = $this->price - 10;
        $this->disableS = false;


        if ( $this->price <= 0 )
            $this->disableR = true;
    }
}
