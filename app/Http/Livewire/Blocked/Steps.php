<?php

namespace App\Http\Livewire\Blocked;

use App\Models\BlockedAccount;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
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
        return view('livewire.blocked.steps');
    }

    public function returnBack($payload)
    {
        $this->step = $payload;
    }
    
    public function eventSteps($payload)
    {
        if ( $payload['from'] === 'init' ){
            $reference = BlockedAccount::where([ 'user_id' => Auth::id() ])->pluck('id_blocked_accounts')->first();

            if ( $reference ) {
                $this->content['codeReference'] = $reference;
                $this->step = 'finishUploadFile';
                return;
            }

            $this->step = $payload['to'];
        }

        if ( $payload['from'] === 'typeUpload' ){
            $this->step = $payload['to'];
            $this->sendTypeUpload( $payload['content'] );
        }

        if ( $payload['from'] === 'typeDocument' ){
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
        $BlockedAccount = BlockedAccount::create([
            'typeUpload'   => $this->content['typeUpload'],
            'typeDocument' => $this->content['typeDocument'],
            'country'      => $this->content['country'],
            'files'        => $payload,
            'user_id'      => Auth::id()
        ]);

        $this->content['codeReference'] = $BlockedAccount['id_blocked_accounts'];
    }
}