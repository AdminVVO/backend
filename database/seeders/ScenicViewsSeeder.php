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
                'type' => 'icons',
                'file' => 'fa-city'
            ],
            [
                'code' => 'beach',
                'name' => 'Beach View',
                'type' => 'icons',
                'file' => 'fa-umbrella-beach'
            ],
            [
                'code' => 'canal',
                'name' => 'Canal View',
                'type' => 'icons',
                'file' => 'fa-house-water'
            ],
            [
                'code' => 'city_skyline',
                'name' => 'City Skyline View',
                'type' => 'icons',
                'file' => 'fa-buildings'
            ],
            [
                'code' => 'courtyard',
                'name' => 'Courtyard View',
                'type' => 'icons',
                'file' => 'fa-flower-tulip'
            ],
            [
                'code' => 'desert',
                'name' => 'Desert View',
                'type' => 'icons',
                'file' => 'fa-cactus'
            ],
            [
                'code' => 'garden',
                'name' => 'Garden View',
                'type' => 'icons',
                'file' => 'fa-house-tree'
            ],
            [
                'code' => 'golf',
                'name' => 'Golf course View',
                'type' => 'icons',
                'file' => 'fa-golf-flag-hole'
            ],
            [
                'code' => 'harbor',
                'name' => 'Harbor View',
                'type' => 'icons',
                'file' => 'fa-ferry'
            ],
            [
                'code' => 'lake',
                'name' => 'Lake View',
                'type' => 'svg',
                'file' => 'lake.svg'
            ],
            [
                'code' => 'mountains',
                'name' => 'View of the mountains',
                'type' => 'icons',
                'file' => 'fa-mountain-sun'
            ],
            [
                'code' => 'ocean',
                'name' => 'Ocean View',
                'type' => 'icons',
                'file' => 'fa-water'
            ],
            [
                'code' => 'park',
                'name' => 'Park View',
                'type' => 'icons',
                'file' => 'fa-bench-tree'
            ],
            [
                'code' => 'pool',
                'name' => 'Pool View',
                'type' => 'icons',
                'file' => 'fa-water-ladder'
            ],
            [
                'code' => 'resort',
                'name' => 'Resort View',
                'type' => 'icons',
                'file' => 'fa-apartment'
            ],
            [
                'code' => 'river',
                'name' => 'River View',
                'type' => 'icons',
                'file' => 'fa-water'
            ],
            [
                'code' => 'sea',
                'name' => 'SeaView',
                'type' => 'icons',
                'file' => 'fa-bridge-water'
            ],
            [
                'code' => 'valley',
                'name' => 'Valley View',
                'type' => 'icons',
                'file' => 'fa-tree-city'
            ],
            [
                'code' => 'vineyard',
                'name' => 'Vineyard View',
                'type' => 'icons',
                'file' => 'fa-grapes'
            ]
        ];

        foreach( $roomsPropert AS $array )
            ScenicViews::create( $array );
    }
}
