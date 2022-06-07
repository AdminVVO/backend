<?php

namespace App\Http\Livewire\Wishlists;

use App\Models\Wishlists as modelWishlists;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Wishlists extends Component
{
    use LivewireAlert;

    public $steps = 'init';
    public $listingId;
    public $photo;
    public $inputWishlists;
    public $wishlists;


    public function render()
    {
        $this->wishlists = modelWishlists::where('user_id', Auth::id())->select('name', 'avatar')->get();
        return view('livewire.wishlists.wishlists');
    }

    public function NewWishlists()
    {
        $this->steps = 'created';
    }

    public function SubmitWishlists()
    {
        $this->resetValidation();    
        
        $validation = Validator::make([
           'inputWishlists' => $this->inputWishlists,
        ],[
            'inputWishlists' => 'required|max:50',
        ]);

            if ($validation->fails())
                $validation->validate();

        modelWishlists::create([
            'name'       => $this->inputWishlists,
            'avatar'     => $this->photo,
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id(),
        ]);
        $this->steps = 'init';
        $this->alert('success', 'Update has been successful!');
        $this->reset(['inputWishlists']);
    }
}
