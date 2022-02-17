<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DescribePlacesComment extends Component
{
    use LivewireAlert;

    public $describePlaceComment = '';

    public function render()
    {
        return view('livewire.listing.steps.describe-places-comment');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $validation = Validator::make([
           'describePlaceComment' => $this->describePlaceComment,
        ],[
            'describePlaceComment' => 'required|max:500',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'You must add a description.');

        $payload = [
            'to' => 'prices',
            'from' => 'describeToPlacesComment',
            'content' => $this->describePlaceComment,
            'img' => 'prices',
        ];
        
        $this->emitUp('next', $payload);
    }
}
