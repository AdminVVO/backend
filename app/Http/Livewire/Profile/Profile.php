<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile as modelProfile;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Profile extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $idUser;
    public $contentUser;
    public $contentProfile;

    public $inputAvatar;
    public $inputAbout;
    public $inputLocation;
    public $inputLanguage = [];
    public $inputWork;

    protected $listeners = [
        'changeModalLanguage' => 'changeModalLanguage'
    ];

    public function mount()
    {
        $this->preloadContent();
    }

    public function render()
    {
        return view('livewire.profile.profile');
    }

    public function updatingInputAvatar($value)
    {
        $nameOriginal = $value->getClientOriginalName();
        $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
        $filename = Str::random(10) . '.' . $extension;

        $value->storeAs('uploadAvatar', $filename, 'uploadAvatar');

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'avatar' => $filename
        ]);
        
        $this->preloadContent();
    }

    public function preloadContent()
    {
        $contentUser = User::select(
            'avatar',
            'govermen_id',
            'email',
            'phone',
            'created_at'
        )->where(['id_user' => $this->idUser])->first();

        $contentProfile = modelProfile::select(
            'about',
            'location',
            'language',
            'work',
        )->where(['user_id' => $this->idUser])->first();

        $this->contentUser['avatar']     = $contentUser['avatar'];
        $this->contentUser['govermen']   = $contentUser['govermen_id'] === null ? false : true;
        $this->contentUser['email']      = $contentUser['email'] === null ? false : true;
        $this->contentUser['phone']      = $contentUser['phone'] === null ? false : true;
        $this->contentUser['created_at'] = $contentUser['created_at'];
        $this->contentUser['name']       = User::Name( $this->idUser );

        if ( $contentProfile ) {
            $this->contentProfile['about']    = $contentProfile['about'];
            $this->contentProfile['location'] = $contentProfile['location'];
            $this->contentProfile['language'] = $contentProfile['language'];
            $this->contentProfile['work']     = $contentProfile['work'];

            $this->inputAbout    = $this->contentProfile['about'];
            $this->inputLocation = $this->contentProfile['location'];
            $this->inputWork     = $this->contentProfile['work'];
            $this->inputLanguage = $this->contentProfile['language'];
        }
    }

    public function changeModalLanguage($payload)
    {   
        $this->inputLanguage = $payload;
    }

    public function reloadInputs()
    {
        $this->reset('inputAbout','inputLocation','inputWork','inputLanguage');
        if ( $this->contentProfile ) {
            $this->inputAbout = $this->contentProfile['about'];
            $this->inputLocation = $this->contentProfile['location'];
            $this->inputWork = $this->contentProfile['work'];
            $this->inputLanguage = $this->contentProfile['language'];
        }
    }

    public function SubmitProfile()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputAbout' => $this->inputAbout,
           'inputLocation' => $this->inputLocation,
           'inputWork' => $this->inputWork,
        ],[
            'inputAbout' => 'required',
            'inputLocation' => 'required',
            'inputWork' => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();

        modelProfile::updateOrCreate([
                'user_id' => Auth::id(),
            ],
            [
                'about' => $this->inputAbout,
                'location' => $this->inputLocation,
                'work' => $this->inputWork,
                'language' => $this->inputLanguage,
            ]
        );

        $this->preloadContent();
        $this->dispatchBrowserEvent('closedSectionEditProfile');
        $this->alert('success', 'Update has been successful!');
    }
}
