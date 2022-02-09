<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TypeHost extends Component
{
    use LivewireAlert;

    public $host = '';

    public function render()
    {
        return view('livewire.listing.steps.type-host');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'host' => $this->host,
        ],[
            'host' => 'required|in:apartment,house,secondary,unique,breakfast,boutique',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select an option!');

        $payload = [
            'to' => $this->host,
            'from' => 'host',
            'content' => $this->host,
            'img' => $this->host,
        ];
        
        $this->emitUp('next', $payload);
    }
}
