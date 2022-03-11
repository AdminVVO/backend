<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Space extends Component
{
    use LivewireAlert;

    public $space = '';

    public function render()
    {
        return view('livewire.listing.steps.space');
    }
 
    public function returnBack()
    {
        $this->emitUp('returnBack', 'notDefine');
    }

    public function next()
    {
        $validation = Validator::make([
           'space' => $this->space,
        ],[
            'space' => 'required|in:shared_room,private_room,entire_place',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select an option!');

        $payload = [
            'to' => 'maps',
            'from' => 'space',
            'content' => $this->space,
            'img' => 'maps',
        ];
        
        $this->emitUp('next', $payload);
    }
}
