<?php

namespace App\Http\Livewire\Validation;

use Livewire\Component;

use App\Models\PersonValidation;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Auth;
use Illuminate\Validation\Rules\Exists;

class Steps extends Component
{
    use LivewireAlert;

    public $step = 'init';
    public $user_id;
    public $type;

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
        return view('livewire.validation.steps', ['user_id' => $this->user_id, 'type' => $this->type]);
    }

    public function returnBack($payload)
    {

        $this->step = $payload;
        $this->sendPhoto([]);
        return;
    }

    public function eventSteps($payload)
    {
        if ($payload['from'] === 'init') {
            $reference = PersonValidation::where(['user_id' => Auth::id()])->pluck('id_person_validation')->first();
            $reference_second = PersonValidation::where(['user_id' => $this->user_id])->pluck('id_person_validation')->first();
            if ($reference || $reference_second) {
                $this->content['codeReference'] = $reference;
                $this->step = 'finishUploadFile';
                return;
            }

            $this->step = $payload['to'];
            if (isset($payload['type'])) {
                $this->sendPhone($payload['content']);
            } else {
                $this->sendPhoto($payload['content']);
            }
        }

        if ($payload['from'] === 'typeUpload') {
            $this->step = $payload['to'];
            $this->sendTypeUpload($payload['content']);
        }

        if ($payload['from'] === 'typeDocument') {
            $this->step = 'uploadFileBrowser';
            if ($this->content['typeUpload'] === 'browser')
                $this->step = 'uploadFileBrowser';

            if ($this->content['typeUpload'] === 'device')
                $this->step = 'uploadFileDevice';

            $this->sendTypeDocument($payload['content']);
        }

        if ($payload['from'] === 'uploadFile') {
            $this->dispatchBrowserEvent('sendValidation');
            $this->sendTypeFiles($payload['content']);
            $this->step = $payload['to'];
        }
    }

    public function sendPhone($payload)
    {
        $this->content['phone'] = $payload['phone'];
        $this->content['user_id'] = $payload['user_id'];
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
        // $this->dispatchBrowserEvent('sendValidationFinish');
        // if (!$this->user_id) {
        // $personValidation = PersonValidation::create([
        // 'typeUpload'    => $this->content['typeUpload'],
        // 'typeDocument'  => $this->content['typeDocument'],
        // 'country'       => $this->content['country'],
        // 'photo'         => $this->content['photo'],
        // 'document'      => $payload,
        // 'user_id'       => Auth::id()
        // ]);
        // } else {
        // $personValidation = PersonValidation::create([
        // 'typeUpload'    => $this->content['typeUpload'],
        // 'typeDocument'  => $this->content['typeDocument'],
        // 'country'       => $this->content['country'],
        // 'photo'         => $this->content['photo'],
        // 'document'      => $payload,
        // 'user_id'       => $this->user_id
        // ]);
        // }
        // $this->content['codeReference'] = $personValidation['id_person_validation'];
    }
}
