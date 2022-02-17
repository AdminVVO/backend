<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Maps extends Component
{
    use LivewireAlert;

    public $content = [
        'longitude' => '',
        'latitude'  => '',
    ];

    protected $listeners = ['nextLocation'];

    public function render()
    {
        return view('livewire.listing.steps.maps');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function nextLocation($payload)
    {
        $validation = Validator::make([
            'longitude'   => $payload['Longitude'],
            'latitude'    => $payload['Latitude'],
        ],[
            'longitude'      => 'required|numeric|between:-180,180',
            'latitude'       => 'required|numeric|between:-90,90',
        ]);
            
            if ($validation->fails())
                return $this->alert('warning', 'You must set the location.');

        $this->content['longitude'] = $payload['Longitude'];
        $this->content['latitude'] = $payload['Latitude'];

        $payload = [
            'to' => 'guests',
            'from' => 'maps',
            'content' => $this->content,
            'img' => 'guests',
        ];
        
        $this->emitUp('next', $payload);
    }

    public function enterManually()
    {
        $this->emitUp('enterManuallyMaps', 'mapsmanually');
    }
}
