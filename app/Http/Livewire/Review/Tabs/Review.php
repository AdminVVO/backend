<?php

namespace App\Http\Livewire\Review\Tabs;

use App\Models\Reviews;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Review extends Component
{
    use LivewireAlert;

    public $data_rating = [];
    public $review = '';

    protected $listeners = [
        'refreshNote' => 'refreshNote'
    ];

    public function render()
    {
        return view('livewire.review.tabs.review');
    }

    public function refreshNote($data)
    {
        $this->data_rating = $data;
    }

    public function createReview() {
        $this->data_rating['comment'] = $this->review;
        $this->data_rating['user_id'] = auth()->user()->id_user;
        Reviews::create($this->data_rating);
        $this->alert('success', 'Your review has been created!');
    }

}
