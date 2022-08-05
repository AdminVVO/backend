<?php

namespace App\Http\Livewire\Listing\Details\Policies;

use App\Models\Listing\ListingPolicies;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingCheckin extends Component
{
    use LivewireAlert;

    public $listingId;
    public $start;
    public $end;
    public $inputStart;
    public $inputStartType;
    public $inputEnd;
    public $inputEndType;
    public $time;

    public function mount()
    {
        $this->inputStart = $this->start['time'];
        $this->inputStartType = $this->start['type'];
        $this->inputEnd = $this->end['time'];
        $this->inputEndType = $this->end['type'];

        for ($i = 1; $i <= 12; $i++)
            $this->time[] = $i . ':00';
    }

    public function render()
    {
        return view('livewire.listing.details.policies.listing-checkin');
    }

    public function reloadInputs()
    {
        $this->inputStart = $this->start['time'];
        $this->inputStartType = $this->start['type'];
        $this->inputEnd = $this->end['time'];
        $this->inputEndType = $this->end['type'];
    }

    public function reloadInputsInvers()
    {
        $this->start['time'] = $this->inputStart;
        $this->start['type'] = $this->inputStartType;
        $this->end['time'] = $this->inputEnd;
        $this->end['type'] = $this->inputEndType;
    }

    public function SubmitCheckin()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputStart'     => $this->inputStart,
           'inputStartType' => $this->inputStartType,
           'inputEnd'       => $this->inputEnd,
           'inputEndType'   => $this->inputEndType,
        ],[
            'inputStart'     => 'required|in:' . implode(',', $this->time),
            'inputStartType' => 'required|in:AM,PM',
            'inputEnd'       => 'required|in:' . implode(',', $this->time),
            'inputEndType'   => 'required|in:AM,PM',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ListingPolicies::where([
            'user_id'     => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'checkin_window_start' => [
                'time' => $this->inputStart,
                'type' => $this->inputStartType
            ],
            'checkin_window_end' => [
                'time' => $this->inputEnd,
                'type' => $this->inputEndType,
            ],
        ]);

        $this->emitTo('listing.details.right-details', 'reloadSubmit', 'rules');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
