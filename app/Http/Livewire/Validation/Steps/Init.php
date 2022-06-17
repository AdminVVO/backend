<?php

namespace App\Http\Livewire\Validation\Steps;

use App\Http\Controllers\Twilio;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use File;
use Str;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Init extends Component
{
    use WithFileUploads;

    public $user_id;
    public $photo;
    public $personmet = '';
    public $uploadFileFront = '';
    public $uploadFileBack = '';
    public $uploadFilePassport = '';
    public $contentIn = [];

    public function render()
    {
        return view('livewire.validation.steps.init', ['user_id' => $this->user_id]);
    }

    public function next()
    {
        return [
            'to' => 'typeDocument',
            'from' => 'init',
            'content' => $this->contentIn
        ];
    }

    public function saveFile()
    {
        $payload = $this->next();

        if ($this->personmet === 'airbnb') {
            Twilio::sendMessageValidation(Auth::user()->phone, Auth::user()->id_user);
            $payload['to'] = 'finishValidation';
            $payload['content'] = ['phone' => Auth::user()->phone, 'user_id' => Auth::user()->id_user];
            $payload['type'] = 1;
            $this->emitUp('eventSteps', $payload);
        }

        if ($this->personmet === 'upload' || $this->personmet === 'webcan') {

            $extensionPhoto = pathinfo($this->photo->getClientOriginalName(), PATHINFO_EXTENSION);

            if (!$this->user_id) {
                $namePhoto = Str::random(10) . '-' . Auth::id() . '.' . $extensionPhoto;
            }
            if ($this->user_id) {
                $namePhoto = Str::random(10) . '-' . $this->user_id . '.' . $extensionPhoto;
            }

            $this->photo->storeAs('PersonalValidation', $namePhoto, 'uploadPersonalValidation');
            $this->contentIn['photo'] = $namePhoto;
            $payload = $this->next();
            $this->emitUp('eventSteps', $payload);
        }
    }
}
