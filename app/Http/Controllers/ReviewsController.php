<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index($id)
    {
        $reviews = Reviews::where('listing_id', $id)->get();

        $data['rating_cleanliness'] = $this->rating_cleanliness = round($reviews->avg('rating_cleanliness'), 1);
        $data['rating_communication'] = round($reviews->avg('rating_communication'), 1);
        $data['rating_check'] = round($reviews->avg('rating_check'), 1);
        $data['rating_accuracy'] = round($reviews->avg('rating_accuracy'), 1);
        $data['rating_location'] = round($reviews->avg('rating_location'), 1);
        $data['rating_value'] = round($reviews->avg('rating_value'), 1);
        $data['rating'] = round(($data['rating_cleanliness'] + $data['rating_communication'] + $data['rating_check'] +
            $data['rating_accuracy'] + $data['rating_location'] + $data['rating_value']) / 6, 1);

        $data['count'] = count($reviews);

        foreach ($reviews as $key => $review) {
            $user = User::find($review['user_id']);
            $data['content'][$key]['comment'] = $review['comment'];
            $data['content'][$key]['full_name'] = $user->full_name;
            $data['content'][$key]['user_id'] = $review['user_id'];
            $data['content'][$key]['avatar'] = $user->avatar;
            $data['content'][$key]['created_at'] = $review['created_at']->diffForHumans();
        }
        
        return view('reviews.index', ['data' => $data]);
    }
}
