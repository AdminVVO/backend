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

    public $language;
    public $languageShow;
    public $inputLanguage;

    public function mount()
    {
        $this->inputLanguage = Auth::user()->language_default;
        $this->language = LanguagesRegions::distinct('code')->pluck('languages', 'code');

        foreach ($this->language as $key => $value) {
            if ( in_array($key, [ $this->inputLanguage ]) ) {
                $this->languageShow = $value;
            }
        }
    }

    public function render()
    {
        return view('livewire.account.preference.language');
    }

    public function reloadInputsInvers()
    {
        $this->languageShow = LanguagesRegions::where('code', $this->inputLanguage )->pluck('languages')->first();
    }

    public function submitLanguage()
    {      
        $validation = Validator::make([
           'language'      => $this->inputLanguage,
        ],[
            'language'      => 'required|exists:languages_regions,code',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'language_default' => $this->inputLanguage,
        ]);

        $this->reloadInputsInvers();
        $this->dispatchBrowserEvent('closedEditContainer');
        $this->alert('success', 'Update has been successful!');
    }
}
