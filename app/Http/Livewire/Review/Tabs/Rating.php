<?php

namespace App\Http\Livewire\Review\Tabs;

use Livewire\Component;

class Rating extends Component
{
    public $data_rating = [];

    protected $listeners = [
        'refreshStay' => 'refreshStay'
    ];

    public function render()
    {
        return view('livewire.review.tabs.rating');
    }

    public function next()
    {     
        $this->emitTo('review.tabs.note', 'refreshRating', $this->data_rating);
    }

    public function cleaning($data) {
        $this->data_rating['rating_cleanliness'] = $data;
    }

    public function accuracy($data)
    {
        $this->data_rating['rating_accuracy'] = $data;
    }

    public function communication($data)
    {
        $this->data_rating['rating_communication'] = $data;   
    }

    public function checkin($data)
    {
        $this->data_rating['rating_check'] = $data;
    }

    public function location($data)
    {
        $this->data_rating['rating_location'] = $data;
    }

    public function money($data)
    {
        $this->data_rating['rating_value'] = $data;
    }

    public function refreshStay($data)
    {
        $this->data_rating = $data;
    }    
}
