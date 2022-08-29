<?php

namespace App\Http\Livewire\Header;

use App\Models\User;
use Auth;
use URL;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $avatar;

    protected $listeners = [
        'reloadHeader' => 'reloadHeader'
    ];

    public function render()
    {
        $this->preload();
        return view('livewire.header.index');
    }

    public function reloadHeader(){ }

    public function preload()
    {
        $this->name = User::FullName();

        $file = Auth::user()->avatar;
            if ( file_exists( storage_path('app/public/uploadAvatar/' . $file  ) ) ) {
                $this->avatar = URL::asset('storage/uploadAvatar/') .'/'. $file;
            } else {
                $this->avatar = URL::asset('assets/img/avatar') .'/'. $file;
            }
    }
}
