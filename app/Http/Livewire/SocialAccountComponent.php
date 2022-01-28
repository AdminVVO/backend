<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\User;
use Livewire\Component;

class SocialAccountComponent extends Component
{
    public function render()
    {
        $social = User::where(['id_user' => Auth::id() ])->select('google_id', 'facebook_id')->first();

        return view('livewire.social-account-component', compact('social'));
    }
}