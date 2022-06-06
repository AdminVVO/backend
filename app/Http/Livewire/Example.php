<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $array = [];

    public function render()
    {
        return view('livewire.example');
    }

    public function mount()
    {
        $this->array = [
            0 => [
                'day' => '27',
                'mounth' => '5',
                'year' => '22',
            ],
        ];
    }
}
