<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class BoutiqueSelect extends Component
{
    use LivewireAlert;

    public $description = '';

    public function render()
    {
        return view('livewire.listing.steps.boutique-select');
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
            'description' => 'required|in:hotel,boat,resort,camper_rv,treehouse,campsite,castle',
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