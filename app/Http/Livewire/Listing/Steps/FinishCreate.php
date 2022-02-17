<?php

namespace App\Http\Livewire\Listing\Steps;

use App\Models\Listings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FinishCreate extends Component
{
    use LivewireAlert;
    
    public $pending = [];

    public function mount()
    {
        $this->pending = Listings::select(
            'id_listings as listing',
            'host',
            'img',
            'created_at'
        )->where([
            'status' => 'in process',
            'user_id' => Auth::id()
        ])->get();
    }

    public function render()
    {
        return view('livewire.listing.steps.finish-create');
    }

    public function next()
    {
        $payload = [
            'to' => 'letGo',
            'from' => 'finish',
        ];
        
        $this->emitUp('next', $payload);
    }

    public function continueListing($payload)
    {
        $this->emitUp('continueCreate', $payload);
    }
}
