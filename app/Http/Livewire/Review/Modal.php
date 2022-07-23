<?php

namespace App\Http\Livewire\Review;

use App\Models\Reviews;
use App\Models\User;
use Livewire\Component;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Modal extends Component
{
    public $listing_id;
    public $search = '';
    public $filter;
    public $data;
    public $is_translate = false;

    protected $listeners = [
        'translate' => 'translate',
        'original' => 'original'
    ];

    public function render()
    {
        $this->preLoad();
        return view('livewire.review.modal');
    }

    public function preLoad()
    {
        if ($this->is_translate) {
            $lang = new GoogleTranslate();
            foreach ($this->data["content"] as $key => $data) {
                $this->data["content"][$key]["comment"] = $lang->setTarget(auth()->user()->language_default)->translate($data["comment"]);
            }
        } else {

            $this->reset(['filter', 'data']);
            $search = $this->search;
            $reviews = Reviews::join('users', 'reviews.user_id', 'users.id_user')->where('listing_id', $this->listing_id)->get();
            $this->data['rating_cleanliness'] = round($reviews->avg('rating_cleanliness'), 1);
            $this->data['rating_communication'] = round($reviews->avg('rating_communication'), 1);
            $this->data['rating_check'] = round($reviews->avg('rating_check'), 1);
            $this->data['rating_accuracy'] = round($reviews->avg('rating_accuracy'), 1);
            $this->data['rating_location'] = round($reviews->avg('rating_location'), 1);
            $this->data['rating_value'] = round($reviews->avg('rating_value'), 1);
            $this->data['rating'] = round(($this->data['rating_cleanliness'] + $this->data['rating_communication'] + $this->data['rating_check'] +
                $this->data['rating_accuracy'] + $this->data['rating_location'] + $this->data['rating_value']) / 6, 1);

            $this->data['count'] = count($reviews);
            if ($search) {
                $this->filter = $reviews->filter(function ($value, $key) use ($reviews, $search) {
                    $comment = explode(' ', strtolower($reviews[$key]->comment));
                    $comment = preg_replace('/[0-9\@\.\;\" "]+/', '', $comment);
                    return count(array_unique(explode(' ', trim($search)))) === count(array_intersect(array_unique($comment), array_unique(explode(' ', strtolower($search)))));
                });
            }

            if ($this->filter) {
                foreach ($this->filter as $key => $review) {
                    $this->data['content'][$key]['comment'] = $review->comment;
                    $this->data['content'][$key]['full_name'] = $review->full_name;
                    $this->data['content'][$key]['avatar'] = $review->avatar;
                    $this->data['content'][$key]['created_at'] = $review->created_at->diffForHumans();
                }
            } else {
                foreach ($reviews as $key => $review) {
                    $this->data['content'][$key]['comment'] = $review->comment;
                    $this->data['content'][$key]['full_name'] = $review->full_name;
                    $this->data['content'][$key]['avatar'] = $review->avatar;
                    $this->data['content'][$key]['created_at'] = $review->created_at->diffForHumans();
                }
            }
        }
    }

    public function translate()
    {
        $this->is_translate = true;
    }

    public function original()
    {
        $this->is_translate = false;
    }
}
