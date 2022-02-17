<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DescribePlacesTitle extends Component
{
    use LivewireAlert;

    public $describPlaceTitle = '';

    public function render()
    {
        return view('livewire.listing.steps.describe-places-title');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'describPlaceTitle' => $this->describPlaceTitle,
        ],[
            'describPlaceTitle' => 'required|max:50',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must add a title.');

        $payload = [
            'to' => 'describeToPlacesOptions',
            'from' => 'describeToPlacesTitle',
            'content' => $this->describPlaceTitle,
            'img' => 'describeToPlacesOptions',
        ];
        
        $this->emitUp('next', $payload);
    }
}
