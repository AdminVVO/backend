<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use Livewire\Component;

class Language extends Component
{
    public $idUser;
    public $inputSpeak = [];

    public function mount()
    {
        $this->preload();
    }

    public function render()
    {
        return view('livewire.profile.language');
    }

    public function preload()
    {
        $speakQuery = Profile::where(['user_id' => $this->idUser])->pluck('language')->toArray();
            if ( $speakQuery )
                $this->inputSpeak = $speakQuery[0];
    }

    public function submitProfileSpeak()
    {
        $this->emitTo('profile.profile', 'changeModalLanguage', $this->inputSpeak );
    }
}
