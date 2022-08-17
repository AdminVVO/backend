<?php

namespace Database\Seeders;

use App\Models\Listing\Listings;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::get()->toArray();
        $listing = Listings::first();
        $reviews = [
            [
                'review_id' => Str::uuid(),
                'user_id' => $user[0]['id_user'],
                'listing_id' => $listing->id_listings,
                'comment' => 'If you are just looking to sleep somewhere & have a good location with lots of things to do in Orlando this is the place.',
                'rating_cleanliness' => 4.5,
                'rating_communication' => 4.7,
                'rating_check' => 4.6,
                'rating_accuracy' => 4.8,
                'rating_location' => 5.0,
                'rating_value' => 4.9
            ],
            [
                'review_id' => Str::uuid(),
                'user_id' => $user[1]['id_user'],
                'listing_id' => $listing->id_listings,
                'comment' => 'Great location and pricing. It was also really clean and nice. Definitely will book again when I come back.',
                'rating_cleanliness' => 5.0,
                'rating_communication' => 4.3,
                'rating_check' => 4.4,
                'rating_accuracy' => 5.0,
                'rating_location' => 4.6,
                'rating_value' => 4.3
            ]
        ];
        foreach ($reviews as $key => $data) {
            Reviews::create($data);
        }
    }
}
