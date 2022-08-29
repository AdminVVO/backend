<?php

namespace App\Http\Livewire\Review\Tabs;

use Livewire\Component;

class Note extends Component
{
    public $note = '';
    public $data_rating = [];

    protected $listeners = [
        'refreshRating' => 'refreshRating'
    ];

    public function render()
    {
        return view('livewire.review.tabs.note');
    }

    public function next()
    {
        $this->data_rating['note'] = $this->note;
        $this->emitTo('review.tabs.review', 'refreshNote', $this->data_rating);
    }

    public function refreshRating($data) {
        $this->data_rating = $data;
    }
}
