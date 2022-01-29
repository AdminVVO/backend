<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\User;
use Livewire\Component;

class SocialAccountComponent extends Component
{
    public $facebook_id, $google_id;

    public function render()
    {
        $social = User::where(['id_user' => Auth::id() ])->select('google_id', 'facebook_id')->first();

        $this->facebook_id = $social['facebook_id'];
        $this->google_id = $social['google_id'];

        return view('livewire.social-account-component', compact('social'));
    }

    public function disconnFace()
    {
        User::where([
            'id_user' => Auth::id(),
            'facebook_id' => $this->facebook_id,
        ])->update([
            'facebook_id' => null,
        ]);
    }

    public function disconnGoog()
    {
        User::where([
            'id_user' => Auth::id(),
            'google_id' => $this->google_id,
        ])->update([
            'google_id' => null,
        ]);
    }
}