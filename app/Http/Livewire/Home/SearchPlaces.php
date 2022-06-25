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
    public $inputKids = 1; 
    public $inputInfant = 1; 
    public $inputPets = 1; 
    public $inputDateIn; 
    public $inputDateOut; 
    public $request; 

    public $disableButton = [
        'Increase' => [],
        'Decrease' => [],
    ];

    protected $listeners = [
        'selectDate' => 'selectDate'
    ];

    public function mount()
    {   
        if ( $this->request != null && isset( $this->request['inputDateIn'] ) ) {
            $this->inputDateIn = $this->request['inputDateIn'];
            $this->inputDateOut = $this->request['inputDateOut'];
        }

        $this->disableButton['Increase']['adult'] = false;
        $this->disableButton['Increase']['kids'] = false;
        $this->disableButton['Increase']['infant'] = false;
        $this->disableButton['Increase']['pets'] = false;

        $this->disableButton['Decrease']['adult'] = true;
        $this->disableButton['Decrease']['kids'] = true;
        $this->disableButton['Decrease']['infant'] = true;
        $this->disableButton['Decrease']['pets'] = true;

    }

    public function render()
    {
        return view('livewire.home.search-places');
    }

    public function selectDate($paylaod)
    {
        $this->inputDateIn = Carbon::createFromDate( $paylaod[0] )->format('d-m-Y');
        $this->inputDateOut = Carbon::createFromDate( $paylaod[1] )->format('d-m-Y');
    }

    public function SubmitPlaces()
    {
        if ( $this->inputAdult >= 0 )
            $content['inputAdult'] = $this->inputAdult;

        if ( $this->inputKids >= 0 )
            $content['inputKids'] = $this->inputKids;
        
        if ( $this->inputInfant >= 0 )
            $content['inputInfant'] = $this->inputInfant;
        
        if ( $this->inputPets >= 0 )
            $content['inputPets'] = $this->inputPets;

        $content['inputDateIn'] = $this->inputDateIn;
        $content['inputDateOut'] = $this->inputDateOut;

        return redirect()->route('search', $content);
    }

    public function buttonIncrease($paylaod)
    {
        if ( $paylaod === 'adult' && $this->inputAdult >= 5 ) 
            return;

        if ( $paylaod === 'kids' && $this->inputKids >= 5 ) 
            return;
        
        if ( $paylaod === 'infant' && $this->inputInfant >= 5 ) 
            return;
        
        if ( $paylaod === 'pets' && $this->inputPets >= 5 ) 
            return;

            if ( $paylaod === 'adult' ) {
                $this->inputAdult = $this->inputAdult + 1;
                $this->disableButton['Decrease']['adult'] = false;
                    if ( $this->inputAdult >= 5 ) 
                        $this->disableButton['Increase']['adult'] = true;
            }

            if ( $paylaod === 'kids' ) {
                $this->inputKids = $this->inputKids + 1;
                $this->disableButton['Decrease']['kids'] = false;
                    if ( $this->inputKids >= 5 ) 
                        $this->disableButton['Increase']['kids'] = true;
            }

            if ( $paylaod === 'infant' ) {
                $this->inputInfant = $this->inputInfant + 1;
                $this->disableButton['Decrease']['infant'] = false;
                    if ( $this->inputInfant >= 5 ) 
                        $this->disableButton['Increase']['infant'] = true;
            }

            if ( $paylaod === 'pets' ) {
                $this->inputPets = $this->inputPets + 1;
                $this->disableButton['Decrease']['pets'] = false;
                    if ( $this->inputPets >= 5 ) 
                        $this->disableButton['Increase']['pets'] = true;
            }
    }

    public function buttonDecrease($paylaod)
    {

        if ( $paylaod === 'adult' && $this->inputAdult <= 1 ) 
            return;

        if ( $paylaod === 'kids' && $this->inputKids <= 1 ) 
            return;
        
        if ( $paylaod === 'infant' && $this->inputInfant <= 1 ) 
            return;
        
        if ( $paylaod === 'pets' && $this->inputPets <= 1 ) 
            return;

            if ( $paylaod === 'adult' ) {
                $this->inputAdult = $this->inputAdult - 1;
                $this->disableButton['Increase']['adult'] = false;
                    if ( $this->inputAdult <= 1 ) 
                        $this->disableButton['Decrease']['adult'] = true;
            }

            if ( $paylaod === 'kids' ) {
                $this->inputKids = $this->inputKids - 1;
                $this->disableButton['Increase']['kids'] = false;
                    if ( $this->inputKids <= 1 ) 
                        $this->disableButton['Decrease']['kids'] = true;
            }

            if ( $paylaod === 'infant' ) {
                $this->inputInfant = $this->inputInfant - 1;
                $this->disableButton['Increase']['infant'] = false;
                    if ( $this->inputInfant <= 1 ) 
                        $this->disableButton['Decrease']['infant'] = true;
            }

            if ( $paylaod === 'pets' ) {
                $this->inputPets = $this->inputPets - 1;
                $this->disableButton['Increase']['pets'] = false;
                    if ( $this->inputPets <= 1 ) 
                        $this->disableButton['Decrease']['pets'] = true;
            }

        $this->alert('success', 'Update has been successful!');
    }
}
