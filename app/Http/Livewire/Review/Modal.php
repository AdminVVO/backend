<?php

namespace App\Http\Livewire\Review;

use App\Models\Reviews;
use App\Models\User;
use Livewire\Component;

class Modal extends Component
{
    public $listing_id;
    public $data;
    public function render()
    {
        $reviews = Reviews::where('listing_id', $this->listing_id)->get();

        $this->data['rating_cleanliness'] = round($reviews->avg('rating_cleanliness'), 1);
        $this->data['rating_communication'] = round($reviews->avg('rating_communication'), 1);
        $this->data['rating_check'] = round($reviews->avg('rating_check'), 1);
        $this->data['rating_accuracy'] = round($reviews->avg('rating_accuracy'), 1);
        $this->data['rating_location'] = round($reviews->avg('rating_location'), 1);
        $this->data['rating_value'] = round($reviews->avg('rating_value'), 1);
        $this->data['rating'] = round(($this->data['rating_cleanliness'] + $this->data['rating_communication'] + $this->data['rating_check'] +
            $this->data['rating_accuracy'] + $this->data['rating_location'] + $this->data['rating_value']) / 6, 1);

        $this->data['count'] = count($reviews);

        foreach ($reviews as $key => $review) {
            $user = User::find($review['user_id']);
            $this->data['content'][$key]['comment'] = $review['comment'];
            $this->data['content'][$key]['full_name'] = $user->full_name;
            $this->data['content'][$key]['avatar'] = $user->avatar;
            $this->data['content'][$key]['created_at'] = $review['created_at']->diffForHumans();
        }

        return view('livewire.review.modal');
    }
}
