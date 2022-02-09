<?php

namespace App\Http\Livewire\Listing\Steps;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UniqueSelect extends Component
{
    use LivewireAlert;

    public $description = '';
    
    public function render()
    {
        return view('livewire.listing.steps.unique-select');
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
            'description' => "required|in:Barn,Boat,Bus,Camper/RV,Treehouse,Campsite,Castle,Dome house,Earth house,Farm stay,Houseboat,Hut,Island,Lighthouse,Plane,Ranch,Religious building,Shepherd's,Shipping container,Tent,Tiny house,Tower,Train,Windmill,Vacation home,Other",
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
