<?php

namespace Database\Seeders;

use App\Models\AmenitiesSafety;
use Illuminate\Database\Seeder;

class AmenitiesSafetySeeder extends Seeder
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
                'code' => 'essentials',
                'name' => 'Essentials',
                'type' => 'amenities'
            ],
            [
                'code' => 'air_conditioning',
                'name' => 'Air conditioning',
                'type' => 'amenities'
            ],
            [
                'code' => 'patio',
                'name' => 'Patio',
                'type' => 'amenities'
            ],
            [
                'code' => 'bbq_grill',
                'name' => 'BBQ grill',
                'type' => 'amenities'
            ],
            [
                'code' => 'outdoor_shower',
                'name' => 'Outdoor shower',
                'type' => 'amenities'
            ],
            [
                'code' => 'fire_pit',
                'name' => 'Fire pit',
                'type' => 'amenities'
            ],
            [
                'code' => 'pool_table',
                'name' => 'Pool table',
                'type' => 'amenities'
            ],
            [
                'code' => 'dryer',
                'name' => 'Dryer',
                'type' => 'amenities'
            ],
            [
                'code' => 'indoor_fireplace',
                'name' => 'Indoor fireplace',
                'type' => 'amenities'
            ],
            [
                'code' => 'hair_dryer',
                'name' => 'Hair dryer',
                'type' => 'amenities'
            ],
            [
                'code' => 'exercise_equipment',
                'name' => 'Exercise equipment',
                'type' => 'amenities'
            ],
            [
                'code' => 'heating',
                'name' => 'Heating',
                'type' => 'amenities'
            ],
            [
                'code' => 'kitchen',
                'name' => 'Kitchen',
                'type' => 'amenities'
            ],
            [
                'code' => 'hot_tub',
                'name' => 'Hot tub',
                'type' => 'amenities'
            ],
            [
                'code' => 'pool',
                'name' => 'Pool',
                'type' => 'amenities'
            ],
            [
                'code' => 'TV',
                'name' => 'TV',
                'type' => 'amenities'
            ],
            [
                'code' => 'washer',
                'name' => 'Washer',
                'type' => 'amenities'
            ],
            [
                'code' => 'wifi',
                'name' => 'Wifi',
                'type' => 'amenities'
            ],
            [
                'code' => 'hot_water',
                'name' => 'Hot water',
                'type' => 'amenities'
            ],
            [
                'code' => 'gym',
                'name' => 'Gym',
                'type' => 'amenities'
            ],
            [
                'code' => 'shampoo',
                'name' => 'Shampoo',
                'type' => 'amenities'
            ],
            [
                'code' => 'hangers',
                'name' => 'Hangers',
                'type' => 'amenities'
            ],
            [
                'code' => 'iron',
                'name' => 'Iron',
                'type' => 'amenities'
            ],
            [
                'code' => 'elevator',
                'name' => 'Elevator',
                'type' => 'amenities'
            ],
            [
                'code' => 'free_parking',
                'name' => 'Free parking on premises',
                'type' => 'amenities'
            ],
            [
                'code' => 'paid_parking',
                'name' => 'Paid parking on premises',
                'type' => 'amenities'
            ],
            [
                'code' => 'outdoor_dining',
                'name' => 'Outdoor Dining Area',
                'type' => 'amenities'
            ],
            [
                'code' => 'dedicated_worspace',
                'name' => 'Dedicated workspace',
                'type' => 'amenities'
            ],
            [
                'code' => 'smoke_alarm',
                'name' => 'Smoke alarm',
                'type' => 'safety'
            ],
            [
                'code' => 'first_kit',
                'name' => 'First aid kit',
                'type' => 'safety'
            ],
            [
                'code' => 'monoxide_alarm',
                'name' => 'Caroom monoxide alarm',
                'type' => 'safety'
            ],
            [
                'code' => 'fire_extinguisher',
                'name' => 'Fire extinguisher',
                'type' => 'safety'
            ],
           
        ];

        foreach( $roomsPropert AS $array )
            AmenitiesSafety::create( $array );
    }
}