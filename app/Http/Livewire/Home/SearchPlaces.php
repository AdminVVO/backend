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

    public $inputAdult = 0; 
    public $inputKids = 0; 
    public $inputInfant = 0; 
    public $inputPets = 0; 
    public $inputDateIn; 
    public $inputDateOut; 

    public $disableButton = [
        'Increase' => [],
        'Decrease' => [],
    ];

    public function mount()
    {   
        $this->disableButton['Increase']['adult'] = false;
        $this->disableButton['Increase']['kids'] = false;
        $this->disableButton['Increase']['infant'] = false;
        $this->disableButton['Increase']['pets'] = false;

        $this->disableButton['Decrease']['adult'] = true;
        $this->disableButton['Decrease']['kids'] = true;
        $this->disableButton['Decrease']['infant'] = true;
        $this->disableButton['Decrease']['pets'] = true;

        $this->inputDateIn = Carbon::createFromDate('2022-05-21')->format('Y-m-d');
        $this->inputDateOut = Carbon::createFromDate('2022-05-25')->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.home.search-places');
    }

    public function SubmitPlaces()
    {
        if ( $this->inputAdult != 0 )
            $content['inputAdult'] = $this->inputAdult;

        if ( $this->inputKids != 0 )
            $content['inputKids'] = $this->inputKids;
        
        if ( $this->inputInfant != 0 )
            $content['inputInfant'] = $this->inputInfant;
        
        if ( $this->inputPets != 0 )
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

        $this->alert('success', 'Update has been successful!');
    }

    public function buttonDecrease($paylaod)
    {

        if ( $paylaod === 'adult' && $this->inputAdult <= 0 ) 
            return;

        if ( $paylaod === 'kids' && $this->inputKids <= 0 ) 
            return;
        
        if ( $paylaod === 'infant' && $this->inputInfant <= 0 ) 
            return;
        
        if ( $paylaod === 'pets' && $this->inputPets <= 0 ) 
            return;

            if ( $paylaod === 'adult' ) {
                $this->inputAdult = $this->inputAdult - 1;
                $this->disableButton['Increase']['adult'] = false;
                    if ( $this->inputAdult <= 0 ) 
                        $this->disableButton['Decrease']['adult'] = true;
            }

            if ( $paylaod === 'kids' ) {
                $this->inputKids = $this->inputKids - 1;
                $this->disableButton['Increase']['kids'] = false;
                    if ( $this->inputKids <= 0 ) 
                        $this->disableButton['Decrease']['kids'] = true;
            }

            if ( $paylaod === 'infant' ) {
                $this->inputInfant = $this->inputInfant - 1;
                $this->disableButton['Increase']['infant'] = false;
                    if ( $this->inputInfant <= 0 ) 
                        $this->disableButton['Decrease']['infant'] = true;
            }

            if ( $paylaod === 'pets' ) {
                $this->inputPets = $this->inputPets - 1;
                $this->disableButton['Increase']['pets'] = false;
                    if ( $this->inputPets <= 0 ) 
                        $this->disableButton['Decrease']['pets'] = true;
            }

        $this->alert('success', 'Update has been successful!');
    }
}
