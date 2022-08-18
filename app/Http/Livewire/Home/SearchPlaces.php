<?php

namespace App\Http\Livewire\Home;

use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;
use Carbon;

class SearchPlaces extends Component
{
    use LivewireAlert;

    public $inputAdult = 1; 
    public $inputKids = 0; 
    public $inputInfant = 0; 
    public $inputPets = 0; 
    public $inputDateIn; 
    public $inputDateOut; 
    public $request; 


    protected $listeners = [
        'selectDate' => 'selectDate'
    ];

    public function mount()
    {   
        if ( $this->request != null && isset( $this->request['inputDateIn'] ) ) {
            $this->inputDateIn = $this->request['inputDateIn'];
            $this->inputDateOut = $this->request['inputDateOut'];
        }
    }

    public function render()
    {
        return view('livewire.home.search-places');
    }

    public function selectDate($payload)
    {
        $this->inputDateIn = Carbon::createFromDate( $payload[0] )->format('d-m-Y');
        $this->inputDateOut = Carbon::createFromDate( $payload[1] )->format('d-m-Y');
        $this->dispatchBrowserEvent('reloadDateInputs', [
            'inputDateIn' => $payload[0],
            'inputDateOut' => $payload[1],
        ]);
    }

    public function SubmitPlaces()
    {
        if ( $this->inputAdult > 0 )
            $content['inputAdult'] = $this->inputAdult;

        if ( $this->inputKids > 0 )
            $content['inputKids'] = $this->inputKids;
        
        if ( $this->inputInfant > 0 )
            $content['inputInfant'] = $this->inputInfant;
        
        if ( $this->inputPets > 0 )
            $content['inputPets'] = $this->inputPets;

        $content['inputDateIn'] = $this->inputDateIn;
        $content['inputDateOut'] = $this->inputDateOut;

        return redirect()->route('search', $content);
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
}
