<?php

namespace Database\Seeders;

use App\Models\GuestSafety;
use Illuminate\Database\Seeder;

class GuestSafetySeeder extends Seeder
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
                'code'     => 'pool/hot_lock',
                'name'     => 'Pool/hot tub without a gate or lock',
            ],
            [
                'code'     => 'nearbylake_river_other',
                'name'     => 'Nearby lake, river, other body of water',
            ],
            [
                'code'     => 'climbing_playstructure',
                'name'     => 'Climbing or play structure',
            ],
            [
                'code'     => 'rails_protection',
                'name'     => 'Heights without rails or protection',
            ],
            [
                'code'     => 'dangerous_animals',
                'name'     => 'Potentially dangerous animal',
            ],
            [
                'code'     => 'security_camera',
                'name'     => 'Security cameras/audio recording devices',
            ],
            [
                'code'     => 'carbonmonoxide_alarm',
                'name'     => 'Carbon monoxide alarm',
            ],
            [
                'code'     => 'smoke_alarm',
                'name'     => 'Smoke alarm',
            ],
            [
                'code'     => 'must_climb_stairs',
                'name'     => 'Must climb stairs',
            ],
            [
                'code'     => 'potential_noise',
                'name'     => 'Potential for noise',
            ],
            [
                'code'     => 'pet_live',
                'name'     => 'Pet(s) live on property',
            ],
            [
                'code'     => 'no_parking_property',
                'name'     => 'No parking on property',
            ],
            [
                'code'     => 'spaces_shared',
                'name'     => 'Some spaces are shared',
            ],
            [
                'code'     => 'amenity_limitations',
                'name'     => 'Amenity limitations',
            ],
            [
                'code'     => 'weapons',
                'name'     => 'Weapons on property',
            ],
        ];

        foreach( $roomsPropert AS $array )
            GuestSafety::create( $array );
    }
}
