<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DescribePlacesOptions extends Component
{
    use LivewireAlert;

    public $describePlaceOptions = [];

    public function render()
    {
        return view('livewire.listing.steps.describe-places-options');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'describePlaceOptions' => $this->describePlaceOptions,
        ],[
            'describePlaceOptions' => 'required|array|min:2|max:2',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must select at least 2 options.');

        $payload = [
            'to' => 'describeToPlacesComment',
            'from' => 'describeToPlacesOptions',
            'content' => $this->describePlaceOptions,
            'img' => 'describeToPlacesComment',
        ];
        
        $this->emitUp('next', $payload);
    }
}
