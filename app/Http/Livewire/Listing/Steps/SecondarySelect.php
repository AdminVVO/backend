<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SecondarySelect extends Component
{
    use LivewireAlert;

    public $description = '';

    public function render()
    {
        return view('livewire.listing.steps.secondary-select');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'description' => $this->description,
        ],[
            'description' => 'required|in:Guesthouse,Guest suite,Farm stay,Vacation home',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select an option!');

        $payload = [
            'to' => 'space',
            'from' => 'description',
            'content' => $this->description,
        ];
        
        $this->emitUp('next', $payload);
    }
}
