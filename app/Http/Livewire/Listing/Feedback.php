<?php

namespace App\Http\Livewire\Listing;

use App\Models\Feedback as ModelFeedback;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class Feedback extends Component
{
    use LivewireAlert;

    public $listing;
    public $show_feedback = 'PostOptions';
    public $feedback_options = '';
    public $feedback_comment = '';
    public $feedback_boolean = false;

    public function render()
    {
        return view('livewire.listing.feedback');
    }

    public function closeFeedback()
    {
        $this->reset(['show_feedback','feedback_options','feedback_comment','feedback_boolean']);
    }

    public function returnSteps()
    {
        $this->reset(['show_feedback','feedback_options','feedback_comment','feedback_boolean']);
    }

    public function nextFeedBackOptions()
    {
        $validation = Validator::make([
           'feedback_options' => $this->feedback_options,
        ],[
            'feedback_options' => 'required|in:details,reservation,adjusting,availability,regulations,cohost,others',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'Validation has failed.');

        $this->show_feedback = 'PostComment';
    }

    public function nextFeedBackComment()
    {
        $validation = Validator::make([
           'feedback_comment' => $this->feedback_comment,
        ],[
            'feedback_comment' => 'required|min:50|max:250',
        ]);

            if ($validation->fails())
                $validation->validate();

        ModelFeedback::create([
            'listing_id' => $this->listing,
            'user_id'    => Auth::id(),
            'questions'  => $this->feedback_options,
            'comment'    => $this->feedback_comment,
            'bug'        => $this->feedback_boolean,
        ]);

        $this->show_feedback = 'PostComplete';
    }
}
