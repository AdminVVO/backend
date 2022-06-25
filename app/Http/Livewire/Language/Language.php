<?php

namespace App\Http\Livewire\Language;

use App\Models\Currencs;
use App\Models\LanguagesRegions;
use App\Models\User;
use Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Language extends Component
{
    use LivewireAlert;

    public $classActive = 'language';
    public $routeRedirect;
    public $authlanguage;
    public $authcurrencs;
    public $language;
    public $currencs;
    public $inputSearch;

    public function mount()
    {
        if ( Auth::check() ) {
            $this->authlanguage = Auth::user()->language_default;
            $this->authcurrencs = Auth::user()->currency_default;
        }

        $this->currencs = Currencs::all();
    }

    public function render()
    {
        $this->language = LanguagesRegions::where(function ($query) {
                    if ( $this->inputSearch != null )
                        return $query->where('languages', 'ilike', '%' . $this->inputSearch . '%');
                })->get();

        return view('livewire.language.language');
    }

    public function changeClass($payload)
    {
        if ( $payload === 'language')
            return $this->classActive = 'language';

        if ( $payload === 'currency')
            return $this->classActive = 'currency';
    }

    public function changeLanguage($payload)
    {
        User::where('id_user', Auth::id() )->update(['language_default' => $payload ]);
        $this->authlanguage = $payload;
        $this->flash('success', 'Update has been successful!', [], route( $this->routeRedirect ));
    }

    public function changeCurrency($payload)
    {
        User::where('id_user', Auth::id() )->update(['currency_default' => $payload ]);
        $this->authcurrencs = $payload;
        $this->flash('success', 'Update has been successful!', [], route( $this->routeRedirect ));
    }
}
