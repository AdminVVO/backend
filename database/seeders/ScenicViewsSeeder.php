<?php

namespace Database\Seeders;

use App\Models\ScenicViews;
use Illuminate\Database\Seeder;

class ScenicViewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomsPropert = [
            [
                'code' => 'bay',
                'name' => 'Bay View',
            ],
            [
                'code' => 'beach',
                'name' => 'Beach View',
            ],
            [
                'code' => 'canal',
                'name' => 'Canal View',
            ],
            [
                'code' => 'city_skyline',
                'name' => 'City Skyline View',
            ],
            [
                'code' => 'courtyard',
                'name' => 'Courtyard View',
            ],
            [
                'code' => 'desert',
                'name' => 'Desert View',
            ],
            [
                'code' => 'garden',
                'name' => 'Garden View',
            ],
            [
                'code' => 'golf',
                'name' => 'Golf course View',
            ],
            [
                'code' => 'harbor',
                'name' => 'Harbor View',
            ],
            [
                'code' => 'lake',
                'name' => 'Lake View',
            ],
            [
                'code' => 'mountains',
                'name' => 'View of the mountains',
            ],
            [
                'code' => 'ocean',
                'name' => 'Ocean View',
            ],
            [
                'code' => 'park',
                'name' => 'Park View',
            ],
            [
                'code' => 'pool',
                'name' => 'Pool View',
            ],
            [
                'code' => 'resort',
                'name' => 'Resort View',
            ],
            [
                'code' => 'river',
                'name' => 'River View',
            ],
            [
                'code' => 'sea',
                'name' => 'SeaView',
            ],
            [
                'code' => 'valley',
                'name' => 'Valley View',
            ],
            [
                'code' => 'vineyard',
                'name' => 'Vineyard View',
            ]
        ];

        foreach( $roomsPropert AS $array )
            ScenicViews::create( $array );
    }
}
