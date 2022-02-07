<?php

namespace App\Http\Livewire\Account\Preference;

use App\Models\User;
use App\Models\LanguagesRegions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Language extends Component
{
    use LivewireAlert;

    public $language = null;
    public $languageFormt = null;
    public $classActive = false;
    public $qlanguage = [];

    public function mount()
    {
        $this->language = Auth::user()->language_default;
    }

    public function render()
    {
        $this->qlanguage = LanguagesRegions::select('code', 'languages')->distinct('code')->get();

        foreach ($this->qlanguage as $key => $value) {
            if ( in_array($value['code'], [ $this->language ]) ) {
                $this->languageFormt = $value['languages'];
            }
        }

        return view('livewire.account.preference.language', compact($this->qlanguage));
    }

    public function statusUpdate()
    {
        $this->resetInput();
        $this->language = Auth::user()->language_default;
    }

    public function changeLanguage($payload)
    {
        $this->language = $payload;
    }

    public function submitLanguage()
    {   
        $validation = Validator::make([
           'language'      => $this->language,
        ],[
            'language'      => 'required|exists:languages_regions,code',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'language_default' => $this->language,
        ]);

        $this->resetInput();

        $this->alert('success', 'Update has been successful!');
    }

    private function resetInput()
    {
        $this->classActive = !$this->classActive; 
        $this->language = null;
        $this->resetValidation();
    }
}
