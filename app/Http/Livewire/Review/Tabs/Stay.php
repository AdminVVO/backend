<?php

namespace App\Http\Livewire\Review\Tabs;

use Livewire\Component;

class Stay extends Component
{
    public $data_rating = [];
    public $listing_id = '';

    public function preLoad() {
        // $this->data_rating['listing_id'] = $this->listing_id;
        $this->data_rating['listing_id'] = 'c08242c6-8e0d-4a4a-b650-f2abaa75f2bc';
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.review.tabs.stay');
    }

    public function ratingStay($data)
    {
        $this->data_rating['rating_stay'] = $data;
    }

    public function next()
    {
        $this->emitTo('review.tabs.rating', 'refreshStay', $this->data_rating);
    }
}
