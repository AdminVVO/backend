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
                'type' => 'apartment'
            ],
            [
                'code' => 'condominiun',
                'name' => 'Condominium (Condo)',
                'type' => 'apartment'
            ],
            [
                'code' => 'serviced_apartm',
                'name' => 'Serviced apartment',
                'type' => 'apartment'
            ],
            [
                'code' => 'loft',
                'name' => 'Loft',
                'type' => 'apartment'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'apartment'
            ],
            [
                'code' => 'residential_home',
                'name' => 'Residential Home',
                'type' => 'house'
            ],
            [
                'code' => 'cabin',
                'name' => 'Cabin',
                'type' => 'house'
            ],
            [
                'code' => 'villa',
                'name' => 'Villa',
                'type' => 'house'
            ],
            [
                'code' => 'townhouse',
                'name' => 'Townhouse',
                'type' => 'house'
            ],
            [
                'code' => 'cottage',
                'name' => 'Cottage',
                'type' => 'house'
            ],
            [
                'code' => 'bungalow',
                'name' => 'Bungalow',
                'type' => 'house'
            ],
            [
                'code' => 'earth_house',
                'name' => 'Earth House',
                'type' => 'house'
            ],
            [
                'code' => 'houseboat',
                'name' => 'Houseboat',
                'type' => 'house'
            ],
            [
                'code' => 'hut',
                'name' => 'Hut',
                'type' => 'house'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'house'
            ],
            [
                'code' => 'dome_house',
                'name' => 'Dome house',
                'type' => 'house'
            ],
            [
                'code' => 'chalet',
                'name' => 'Chalet',
                'type' => 'house'
            ],
            [
                'code' => 'lighthouse',
                'name' => 'Lighthouse',
                'type' => 'house'
            ],
            [
                'code' => 'shepherds_hut',
                'name' => "Shepherd's hut",
                'type' => 'house'
            ],
            [
                'code' => 'guesthouse',
                'name' => 'Guesthouse',
                'type' => 'secondary'
            ],
            [
                'code' => 'guest_suite',
                'name' => 'Guest Suite',
                'type' => 'secondary'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'secondary'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'secondary'
            ],
            [
                'code' => 'barn',
                'name' => 'Barn',
                'type' => 'unique'
            ],
            [
                'code' => 'boat',
                'name' => 'Boat',
                'type' => 'unique'
            ],
            [
                'code' => 'bus',
                'name' => 'Bus',
                'type' => 'unique'
            ],
            [
                'code' => 'camper_rv',
                'name' => 'Camper/RV',
                'type' => 'unique'
            ],
            [
                'code' => 'treehouse',
                'name' => 'Treehouse',
                'type' => 'unique'
            ],
            [
                'code' => 'campsite',
                'name' => 'Campsite',
                'type' => 'unique'
            ],
            [
                'code' => 'castle',
                'name' => 'Castle',
                'type' => 'unique'
            ],
            [
                'code' => 'dome_house',
                'name' => 'Dome House',
                'type' => 'unique'
            ],
            [
                'code' => 'earth_house',
                'name' => 'Earth House',
                'type' => 'unique'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'unique'
            ],
            [
                'code' => 'houseboat',
                'name' => 'Houseboat',
                'type' => 'unique'
            ],
            [
                'code' => 'hut',
                'name' => 'Hut',
                'type' => 'unique'
            ],
            [
                'code' => 'island',
                'name' => 'Island',
                'type' => 'unique'
            ],
            [
                'code' => 'lighthouse',
                'name' => 'Lighthouse',
                'type' => 'unique'
            ],
            [
                'code' => 'plane',
                'name' => 'Plane',
                'type' => 'unique'
            ],
            [
                'code' => 'ranch',
                'name' => 'Ranch',
                'type' => 'unique'
            ],
            [
                'code' => 'religious_building',
                'name' => 'Religious Building',
                'type' => 'unique'
            ],
            [
                'code' => 'shepherds',
                'name' => "Shepherd's",
                'type' => 'unique'
            ],
            [
                'code' => 'shipping_container',
                'name' => 'Shipping Container',
                'type' => 'unique'
            ],
            [
                'code' => 'tent',
                'name' => 'Tent',
                'type' => 'unique'
            ],
            [
                'code' => 'tiny_house',
                'name' => 'Tiny House',
                'type' => 'unique'
            ],
            [
                'code' => 'tower',
                'name' => 'Tower',
                'type' => 'unique'
            ],
            [
                'code' => 'train',
                'name' => 'Train',
                'type' => 'unique'
            ],
            [
                'code' => 'windmill',
                'name' => 'Windmill',
                'type' => 'unique'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'unique'
            ],
            [
                'code' => 'other',
                'name' => 'Other',
                'type' => 'unique'
            ],
            [
                'code' => 'bed_breakfast',
                'name' => 'Bed and Breakfast',
                'type' => 'breakfast'
            ],
            [
                'code' => 'nature_lodge',
                'name' => 'Nature Lodge',
                'type' => 'breakfast'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'breakfast'
            ],
            [
                'code' => 'hotel',
                'name' => 'Hotel',
                'type' => 'boutique'
            ],
            [
                'code' => 'boat',
                'name' => 'Boat',
                'type' => 'boutique'
            ],
            [
                'code' => 'resort',
                'name' => 'Resort',
                'type' => 'boutique'
            ],
            [
                'code' => 'camper_rv',
                'name' => 'Camper/RV',
                'type' => 'boutique'
            ],
            [
                'code' => 'treehouse',
                'name' => 'Treehouse',
                'type' => 'boutique'
            ],
            [
                'code' => 'campsite',
                'name' => 'Campsite',
                'type' => 'boutique'
            ],
            [
                'code' => 'castle',
                'name' => 'Castle',
                'type' => 'boutique'
            ],
        ];

        foreach( $roomsPropert AS $array )
            RoomsProperty::create( $array );
    }
}



