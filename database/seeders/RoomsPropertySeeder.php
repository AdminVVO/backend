<?php

namespace Database\Seeders;

use App\Models\RoomsProperty;
use Illuminate\Database\Seeder;

class RoomsPropertySeeder extends Seeder
{
    public function run()
    {
        $roomsPropert = [
            [
                'code' => 'rental_unique',
                'name' => 'Rental Unit',
                'type' => 'apartment',
                'name_type' => 'Apartments'
            ],
            [
                'code' => 'condominiun',
                'name' => 'Condominium (Condo)',
                'type' => 'apartment',
                'name_type' => 'Apartments'
            ],
            [
                'code' => 'serviced_apartm',
                'name' => 'Serviced apartment',
                'type' => 'apartment',
                'name_type' => 'Apartments'
            ],
            [
                'code' => 'loft',
                'name' => 'Loft',
                'type' => 'apartment',
                'name_type' => 'Apartments'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'apartment',
                'name_type' => 'Apartments'
            ],
            [
                'code' => 'residential_home',
                'name' => 'Residential Home',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'cabin',
                'name' => 'Cabin',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'villa',
                'name' => 'Villa',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'townhouse',
                'name' => 'Townhouse',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'cottage',
                'name' => 'Cottage',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'bungalow',
                'name' => 'Bungalow',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'earth_house',
                'name' => 'Earth House',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'houseboat',
                'name' => 'Houseboat',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'hut',
                'name' => 'Hut',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'dome_house',
                'name' => 'Dome house',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'chalet',
                'name' => 'Chalet',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'lighthouse',
                'name' => 'Lighthouse',
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'shepherds_hut',
                'name' => "Shepherd's hut",
                'type' => 'house',
                'name_type' => 'House'
            ],
            [
                'code' => 'guesthouse',
                'name' => 'Guesthouse',
                'type' => 'secondary',
                'name_type' => 'Attached house'
            ],
            [
                'code' => 'guest_suite',
                'name' => 'Guest Suite',
                'type' => 'secondary',
                'name_type' => 'Attached house'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'secondary',
                'name_type' => 'Attached house'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'secondary',
                'name_type' => 'Attached house'
            ],
            [
                'code' => 'barn',
                'name' => 'Barn',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'boat',
                'name' => 'Boat',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'bus',
                'name' => 'Bus',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'camper_rv',
                'name' => 'Camper/RV',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'treehouse',
                'name' => 'Treehouse',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'campsite',
                'name' => 'Campsite',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'castle',
                'name' => 'Castle',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'dome_house',
                'name' => 'Dome House',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'earth_house',
                'name' => 'Earth House',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'houseboat',
                'name' => 'Houseboat',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'hut',
                'name' => 'Hut',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'island',
                'name' => 'Island',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'lighthouse',
                'name' => 'Lighthouse',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'plane',
                'name' => 'Plane',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'ranch',
                'name' => 'Ranch',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'religious_building',
                'name' => 'Religious Building',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'shepherds',
                'name' => "Shepherd's",
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'shipping_container',
                'name' => 'Shipping Container',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'tent',
                'name' => 'Tent',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'tiny_house',
                'name' => 'Tiny House',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'tower',
                'name' => 'Tower',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'train',
                'name' => 'Train',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'windmill',
                'name' => 'Windmill',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'other',
                'name' => 'Other',
                'type' => 'unique',
                'name_type' => 'Unique accommodation'
            ],
            [
                'code' => 'bed_breakfast',
                'name' => 'Bed and Breakfast',
                'type' => 'breakfast',
                'name_type' => 'Bed and breakfasts'
            ],
            [
                'code' => 'nature_lodge',
                'name' => 'Nature Lodge',
                'type' => 'breakfast',
                'name_type' => 'Bed and breakfasts'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'breakfast',
                'name_type' => 'Bed and breakfasts'
            ],
            [
                'code' => 'hotel',
                'name' => 'Hotel',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
            [
                'code' => 'boat',
                'name' => 'Boat',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
            [
                'code' => 'resort',
                'name' => 'Resort',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
            [
                'code' => 'camper_rv',
                'name' => 'Camper/RV',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
            [
                'code' => 'treehouse',
                'name' => 'Treehouse',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
            [
                'code' => 'campsite',
                'name' => 'Campsite',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
            [
                'code' => 'castle',
                'name' => 'Castle',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel'
            ],
        ];

        foreach( $roomsPropert AS $array )
            RoomsProperty::create( $array );
    }
}



