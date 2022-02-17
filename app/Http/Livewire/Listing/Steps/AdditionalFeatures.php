<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdditionalFeatures extends Component
{
    use LivewireAlert;

    public $featurs = [];

    public function render()
    {
        return view('livewire.listing.steps.additional-features');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'featurs' => $this->featurs,
        ],[
            'featurs' => 'array|in:Security camera(s),Weapons,Dangerous animals',
        ]);
            if ($validation->fails())
                return $this->alert('warning', 'You must add a description.');

        $payload = [
            'to' => 'checklisting',
            'from' => 'featurs',
            'content' => $this->featurs,
            'img' => 'checklisting',
        ];
        
        $this->emitUp('next', $payload);
    }
}
