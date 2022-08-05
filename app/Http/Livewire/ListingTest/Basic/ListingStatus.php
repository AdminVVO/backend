<?php

namespace App\Http\Livewire\ListingTest\Basic;

use App\Models\Listing\Listings;
use App\Models\ReasonDisactive;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingStatus extends Component
{
    use LivewireAlert;

    public $listingId;
    public $status;
    public $resort;
    public $template;
    public $inputStatus;
    public $inputResort;
    public $inputTemplate;
    public $inputSnooze;

    protected $listeners = [
        'changeSnoozeApline' => 'changeSnoozeApline',
        'saveSnoozeApline' => 'saveSnoozeApline',
        'cancelSnoozeApline' => 'cancelSnoozeApline',
        'saveDisactivate' => 'saveDisactivate',
    ];

    public function mount()
    {
        $this->inputStatus = $this->status === 'in process' ? 'unlisted' : $this->status;
        $this->inputResort = $this->resort;
        $this->inputTemplate = $this->template;
    }

    public function render()
    {
        return view('livewire.listing-test.basic.listing-status');
    }
    
    public function changeSnoozeApline($payload)
    {
        $this->inputSnooze = $payload;
    }
    
    public function saveSnoozeApline()
    {
        $this->resetValidation();    

        $validation = Validator::make([
           'inputStatus' => $this->inputStatus,
           'inputSnooze' => $this->inputSnooze,
        ],[
            'inputStatus' => 'required|in:Snoozed',
            'inputSnooze' => 'required|array',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'Validation has failed.');

            $contentTime = [
                'timeStart' => $this->inputSnooze['start'],
                'timeEnd' => $this->inputSnooze['end']
            ];

            Listings::where([
                'user_id'     => Auth::id(),
                'id_listings' => $this->listingId,
            ])->whereNotIn('status', ['in process'])->update([
                'status'   => $this->inputStatus,
                'snooze'   => $contentTime,
            ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('closeSnoozeApline');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }

    public function cancelSnoozeApline()
    {
        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputs();
    }

    public function reloadInputs()
    {
        $this->reset(['inputSnooze']);
        $this->inputStatus = $this->status;
        $this->inputResort = $this->resort;
        $this->inputTemplate = $this->template;
    }

    public function reloadInputsInvers()
    {
        $this->reset(['inputSnooze']);
        $this->status = $this->inputStatus;
        $this->resort = $this->inputResort;
        $this->template = $this->inputTemplate;
    }

    public function SubmitStatus()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputStatus' => $this->inputStatus,
           'inputResort' => $this->inputResort,
           'template' => $this->template,
        ],[
            'inputStatus' => 'required|in:Listed,Snoozed,Unlisted,Deactivate',
            'inputResort' => 'required|email',
            'template' => 'required|in:MS Code,Source',
        ]);

            if ($validation->fails())
                $validation->validate();

            Listings::where([
                'user_id'     => Auth::id(),
                'id_listings' => $this->listingId,
            ])->whereNotIn('status', ['in process'])->update([
                'status'   => $this->inputStatus,
                'resort'   => $this->inputResort,
                'template' => $this->template,
            ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
    
    public function saveDisactivate($paylaod)
    {
        $this->resetValidation();    

        $validation = Validator::make([
           'inputStatus' => $this->inputStatus,
        ],[
            'inputStatus' => 'required|in:Unlisted',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'Validation has failed.');

            Listings::where([
                'user_id'     => Auth::id(),
                'id_listings' => $this->listingId,
            ])->whereNotIn('status', ['in process'])->update([
                'status'   => $this->inputStatus,
            ]);

            ReasonDisactive::create([
                'listing_id' => $this->listingId,
                'user_id'    => Auth::id(),
                'reason'     => $paylaod,
            ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->dispatchBrowserEvent('closeSnoozeApline');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
