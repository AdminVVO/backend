<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile as modelProfile;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Profile extends Component
{
    use LivewireAlert;

    public $idUser;
    public $contentUser;
    public $about;
    public $location;
    public $work;
    public $inputAbout;
    public $inputLocation;
    public $inputWork;

    public function render()
    {
        $this->contentUser = User::where([
            'id_user' => $this->idUser,
        ])
        ->leftJoin('profiles', 'users.id_user', 'profiles.user_id')
        ->first();

        return view('livewire.profile.profile');
    }

    public function reloadInputs()
    {
        $this->inputAbout = $this->about;
        $this->inputLocation = $this->location;
        $this->inputWork = $this->work;
    }

    public function reloadInputsInvers()
    {
        $this->about= $this->inputAbout;
        $this->location= $this->inputLocation;
        $this->work= $this->inputWork;
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
                'language' => 'ES',
            ]
        );

        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
