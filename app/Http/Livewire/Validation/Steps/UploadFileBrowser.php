<?php

namespace App\Http\Livewire\Validation\Steps;

use App\Events\sendPersonValidation;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use File;
use Str;
use Auth;

class UploadFileBrowser extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $user_id = '';
    public $typeDocument = '';
    public $typeUpload = '';
    public $country = '';
    public $uploadFileFront = '';
    public $uploadFileBack = '';
    public $uploadFilePassport = '';
    public $contentIn = [];

    public function mount($content)
    {
        $this->typeDocument = $content['typeDocument'];
        $this->typeUpload = $content['typeUpload'];
        $this->country = $content['country'];
    }
    
    public function render()
    {
        return view('livewire.validation.steps.upload-file-browser', ['user_id' => $this->user_id]);
    }
    
    public function hydrate()
    {
         $errors = $this->getErrorBag();
         if ( $errors->has('uploadFileFront') )
            $this->uploadFileFront = '';

         if ( $errors->has('uploadFileBack') )
            $this->uploadFileBack = '';

         if ( $errors->has('uploadFilePassport') )
            $this->uploadFilePassport = '';

        $this->resetValidation();
    }

    public function updatedPhoto()
    {
        $this->validate([
            'uploadFileFront' => 'mimes:jpeg,jpg,png|max:2048', // 1MB Max
            'uploadFileBack' => 'mimes:jpeg,jpg,png|max:2048', // 1MB Max
            'uploadFilePassport' => 'mimes:jpeg,jpg,png|max:2048', // 1MB Max
        ]);
    }

    public function submitFileUploads()
    {
        if ( $this->typeDocument === "Driver's License" || $this->typeDocument === 'Identity Card' )
            $validation = Validator::make([
               'uploadFileFront' => $this->uploadFileFront,
               'uploadFileBack' => $this->uploadFileBack,
            ],[
                'uploadFileFront' => 'required|mimes:jpeg,jpg,png|max:2048',
                'uploadFileBack' => 'required|mimes:jpeg,jpg,png|max:2048'
            ]);

        if ( $this->typeDocument === "Passport" )
            $validation = Validator::make([
               'uploadFilePassport' => $this->uploadFilePassport,
            ],[
                'uploadFilePassport' => 'required|mimes:jpeg,jpg,png|max:2048'
            ]);

            if ($validation->fails())
                return $this->alert('warning', 'The file does not meet the requirements. Type: PNG/JPG, SizeMax: 2mb.');

        if ( $this->typeDocument === "Driver's License" || $this->typeDocument === 'Identity Card' ){
            
            $extensionFront = pathinfo( $this->uploadFileFront->getClientOriginalName(), PATHINFO_EXTENSION);
                $nameFront = Str::random(10) . '-' . Auth::id() . '.' . $extensionFront;
                    $this->uploadFileFront->storeAs('personalValidation', $nameFront, 'uploadPersonalValidation');
            
            $extensionBack = pathinfo( $this->uploadFileBack->getClientOriginalName(), PATHINFO_EXTENSION);
                $nameBack = Str::random(10) . '-' . Auth::id() . '.' . $extensionBack;
                    $this->uploadFileBack->storeAs('personalValidation', $nameBack, 'uploadPersonalValidation');
            
            $this->contentIn['uploadFileFront'] = $nameFront;
            $this->contentIn['uploadFileBack'] = $nameBack;
        }

        if ( $this->typeDocument === "Passport" ){
            
            $extensionPassport = pathinfo( $this->uploadFilePassport->getClientOriginalName(), PATHINFO_EXTENSION);
                $namePassport = Str::random(10) . '-' . Auth::id() . '.' . $extensionPassport;
                    $this->uploadFilePassport->storeAs('personalValidation', $namePassport, 'uploadPersonalValidation');
                    
            $this->contentIn['uploadFilePassport'] = $this->uploadFilePassport;
        }
        
        $payload = [
            'to' => 'finishUploadFile',
            'from' => 'uploadFile',
            'content' => $this->contentIn,
        ];

        $this->dispatchBrowserEvent('sendValidation');
        event(new sendPersonValidation($this->user_id));
        $this->emitUp('eventSteps', $payload);
    }
}
