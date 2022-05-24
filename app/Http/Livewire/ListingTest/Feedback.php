<?php

namespace App\Http\Livewire\ListingTest;

use App\Models\Feedback as ModalFeedback;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Feedback extends Component
{
    use LivewireAlert;

    public $listingId;
    public $inputOptions;
    public $inputComments;
    public $inputBug = false;
    public $step = 'init';

    protected $listeners = [
        'resetLivewireFeedback' => 'resetLivewireFeedback'
    ];

    public function mount($listing)
    {
        $this->listingId = $listing;
    }

    public function render()
    {
        return view('livewire.listing-test.feedback');
    }

    public function resetLivewireFeedback()
    {
        $this->reset(['inputComments','inputOptions','inputBug','step']);
    }

    public function next()
    {
        $this->resetValidation();    

        $validation = Validator::make([
           'inputOptions' => $this->inputOptions,
        ],[
            'inputOptions' => 'required|in:Edit,Configuring,Adjusting,Availability,Laws,Co-host,Other',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'Validation has failed.');

        $this->step = 'comment';

    }

    public function nextComments()
    {
        $validation = Validator::make([
           'inputComments' => $this->inputComments,
        ],[
            'inputComments' => 'required|min:50|max:250',
        ]);

            if ($validation->fails())
                $validation->validate();

        ModalFeedback::create([
            'listing_id' => $this->listingId,
            'user_id'    => Auth::id(),
            'questions'  => $this->inputOptions,
            'comment'    => $this->inputComments,
            'bug'        => $this->inputBug,
        ]);

        $this->step = 'finish';

    }
}
