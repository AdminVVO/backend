<?php

namespace App\Http\Livewire\Listing\Details;

use App\Models\ReasonDisactive;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Disactive extends Component
{
    use LivewireAlert;

    public $listingId;
    public $inputOptions;

    protected $listeners = [
        'cancelUnlisted' => 'cancelUnlisted',
        'saveUnlisted' => 'saveUnlisted',
    ];

    public function mount($listing)
    {
        $this->listingId = $listing;
    }

    public function render()
    {
        return view('livewire.listing.details.disactive');
    }

    public function cancelUnlisted()
    {
        $this->emitTo('listing.details.basic.listing-status', 'cancelSnoozeApline');
        $this->reset(['inputOptions']);
    }

    public function saveUnlisted()
    {
        $validation = Validator::make([
           'inputOptions' => $this->inputOptions,
        ],[
            'inputOptions' => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();

        $this->emitTo('listing.details.basic.listing-status', 'saveDisactivate', $this->inputOptions);
    }
}
