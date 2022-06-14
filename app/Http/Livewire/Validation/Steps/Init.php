<?php

namespace App\Http\Livewire\Validation\Steps;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use File;
use Str;
use Auth;

class Init extends Component
{
    use WithFileUploads;

    public $photo;
    public $personmet = '';
    public $uploadFileFront = '';
    public $uploadFileBack = '';
    public $uploadFilePassport = '';
    public $contentIn = [];

    public function render()
    {
        return view('livewire.validation.steps.init');
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
            $payload['to'] = 'finishUploadFile';
            $this->emitUp('eventSteps', $payload);
        }

        if ($this->personmet === 'upload') {

            $extensionPhoto = pathinfo($this->photo->getClientOriginalName(), PATHINFO_EXTENSION);
            $namePhoto = Str::random(10) . '-' . Auth::id() . '.' . $extensionPhoto;

            $this->photo->storeAs('PersonalValidation', $namePhoto, 'uploadPersonalValidation');

            $this->contentIn['photo'] = $namePhoto;

            $this->emitUp('eventSteps', $payload);
        }
    }
}
