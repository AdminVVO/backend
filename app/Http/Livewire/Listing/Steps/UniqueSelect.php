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
            'description' => "required|in:barn,boat,bus,camper_rv,treehouse,campsite,castle,dome_house,earth_house,farm_stay,houseboat,hut,island,lighthouse,plane,ranch,religious_building,shepherds,shipping_container,tent,tiny_house,tower,train,windmill,vacation_home,other",
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