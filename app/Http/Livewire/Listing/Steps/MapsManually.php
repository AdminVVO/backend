<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MapsManually extends Component
{
    use LivewireAlert;

    public $street = '';
    public $suite = '';
    public $city = '';
    public $state = '';
    public $zip_code = '';
    public $country = '';
    public $content = [
        'street'   => '',
        'suite'    => '',
        'city'     => '',
        'state'    => '',
        'zip_code' => '',
        'country'  => '',
    ];

    public function render()
    {
        return view('livewire.listing.steps.maps-manually');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
            'street'   => $this->street,
            'suite'    => $this->suite,
            'city'     => $this->city,
            'state'    => $this->state,
            'zip_code' => $this->zip_code,
            'country'  => $this->country,
        ],[
            'street'      => 'required',
            'suite'       => '',
            'city'        => 'required',
            'state'       => '',
            'zip_code'    => 'regex:/^[0-9]+$/',
            'country'     => 'required|in:VE,US',
        ]);
            
            if ($validation->fails())
                $validation->validate();

        $this->content['street']   = $this->street;
        $this->content['suite']    = $this->suite;
        $this->content['city']     = $this->city;
        $this->content['state']    = $this->state;
        $this->content['zip_code'] = $this->zip_code;
        $this->content['country']  = $this->country;

        $payload = [
            'to' => 'guests',
            'from' => 'mapsmanually',
            'content' => $this->content,
            'img' => 'guests',
        ];
        
        $this->emitUp('next', $payload);
    }
}
