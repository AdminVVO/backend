<?php

namespace App\Http\Livewire\Validation;

use Livewire\Component;

use App\Models\PersonValidation;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Auth;

class Steps extends Component
{ 
    use LivewireAlert;
    
    public $step = 'init';
    public $content = [
        'typeUpload' => '',
        'typeDocument' => '',
        'country' => '',
        'codeReference' => '',
    ];

    public $listeners = [
        'returnBack',
        'eventSteps',
    ];

    public function render()
    {
        return view('livewire.validation.steps');
    }

    public function returnBack($payload)
    {
        $this->step = $payload;
    }
    
    public function eventSteps($payload)
    {
        if ( $payload['from'] === 'init' ){
            $reference = PersonValidation::where([ 'user_id' => Auth::id() ])->pluck('id_person_validation')->first();
            
            if ( $reference ) {
                $this->content['codeReference'] = $reference;
                $this->step = 'finishUploadFile';
                return;
            }

            $this->step = $payload['to'];
            $this->sendPhoto( $payload['content'] );
        }

        if ( $payload['from'] === 'typeUpload' ){
            $this->step = $payload['to'];
            $this->sendTypeUpload( $payload['content'] );
        }

        if ( $payload['from'] === 'typeDocument' ){
            $this->step = 'uploadFileBrowser';
            if ( $this->content['typeUpload'] === 'browser')
                $this->step = 'uploadFileBrowser';
                
            if ( $this->content['typeUpload'] === 'device')
                $this->step = 'uploadFileDevice';

            $this->sendTypeDocument( $payload['content'] );
        }

        if ( $payload['from'] === 'uploadFile' ){
            
            $this->sendTypeFiles( $payload['content'] );
            $this->step = $payload['to'];
        }
    }
    
    public function sendPhoto($payload)
    {
        $this->content['photo'] = $payload;
    }
    
    public function sendTypeUpload($payload)
    {
        $this->content['typeUpload'] = $payload;
    }

    public function sendTypeDocument($payload)
    {
        $this->content['typeDocument'] = $payload['document'];
        $this->content['country'] = $payload['country'];
    }
    
    public function sendTypeFiles($payload)
    {
        $personValidation = PersonValidation::create([
            'typeUpload'    => $this->content['typeUpload'],
            'typeDocument'  => $this->content['typeDocument'],
            'country'       => $this->content['country'],
            'photo'         => $this->content['photo'],
            'document'      => $payload,
            'user_id'       => Auth::id()
        ]);

        $this->content['codeReference'] = $personValidation['id_person_validation'];
    }
}
