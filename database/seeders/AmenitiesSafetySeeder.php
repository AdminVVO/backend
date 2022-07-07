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
                'code'     => 'bathtub',
                'name'     => 'Bathtub',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'bidet',
                'name'     => 'Bidet',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'body_soap',
                'name'     => 'Body soap',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'cleaning_products',
                'name'     => 'Cleaning products',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'conditioner',
                'name'     => 'Conditioner',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'hair_dryer',
                'name'     => 'Hair dryer',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'hot_water',
                'name'     => 'Hot water',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'outdoor_shower',
                'name'     => 'Outdoor shower',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'shampoo',
                'name'     => 'Shampoo',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'shower_gel',
                'name'     => 'Shower gel',
                'type'     => 'amenities',
                'typeList' => 'bathroom'
            ],
            [
                'code'     => 'essentials',
                'name'     => 'Essentials',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'bed_linens',
                'name'     => 'Bed linens',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'clothing_storage',
                'name'     => 'Clothing storage',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'dryer',
                'name'     => 'Dryer',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'drying_clothing',
                'name'     => 'Drying rack for clothing',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'extra_blankets',
                'name'     => 'Extra pillows and blankets',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'hangers',
                'name'     => 'Hangers',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'iron',
                'name'     => 'Iron',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'mosquito_net',
                'name'     => 'Mosquito net',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'room_shades',
                'name'     => 'Room-darkening shades',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'safe',
                'name'     => 'Safe',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'washer',
                'name'     => 'Washer',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry'
            ],
            [
                'code'     => 'books_material',
                'name'     => 'Books and reading material',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'ethernet_connection',
                'name'     => 'Ethernet connection',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'exercise_equipment',
                'name'     => 'Exercise equipment',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'game_console',
                'name'     => 'Game console',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'piano',
                'name'     => 'Piano',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'pingpong_table',
                'name'     => 'Ping pong table',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'pool',
                'name'     => 'Pool',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'pool_table',
                'name'     => 'Pool table',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'record_player',
                'name'     => 'Record player',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'sound_system',
                'name'     => 'Sound system',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'tv',
                'name'     => 'TV',
                'type'     => 'amenities',
                'typeList' => 'entertainment'
            ],
            [
                'code'     => 'baby_bath',
                'name'     => 'Baby bath',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'baby_monitor',
                'name'     => 'Baby monitor',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'baby_gates',
                'name'     => 'Baby safety gates',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'babysitter_recommendations',
                'name'     => 'Babysitter recommendations',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'board_games',
                'name'     => 'Board games',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'changing_table',
                'name'     => 'Changing table',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => "childrens_toys",
                'name'     => "Children's books and toys",
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'childrens_dinnerware',
                'name'     => "Children's dinnerware",
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'crib',
                'name'     => 'Crib',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'fireplace_guards',
                'name'     => 'Fireplace guards',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'high_chair',
                'name'     => 'High chair',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'outlet_covers',
                'name'     => 'Outlet covers',
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'packn_crib',
                'name'     => "Pack'n play/Traver crib",
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'table_guards',
                'name'     => "Table corner guards",
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'window_guards',
                'name'     => "Window guards",
                'type'     => 'amenities',
                'typeList' => 'Family'
            ],
            [
                'code'     => 'air_conditioning',
                'name'     => "Air conditioning",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling'
            ],
            [
                'code'     => 'ceiling_fan',
                'name'     => "Ceiling fan",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling'
            ],
            [
                'code'     => 'heating',
                'name'     => "Heating",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling'
            ],
            [
                'code'     => 'indoor_fireplace',
                'name'     => "Indoor fireplace",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling'
            ],
            [
                'code'     => 'portable_fans',
                'name'     => "Portable fans",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling'
            ],
            [
                'code'     => 'monoxide_alarm',
                'name'     => "Carbon monoxide alarm",
                'type'     => 'safety',
                'typeList' => 'home_safety'
            ],
            [
                'code'     => 'fire_extinguisher',
                'name'     => "Fire extinguisher",
                'type'     => 'safety',
                'typeList' => 'home_safety'
            ],
            [
                'code'     => 'first_kit',
                'name'     => "First aid kit",
                'type'     => 'safety',
                'typeList' => 'home_safety'
            ],
            [
                'code'     => 'smoke_alarm',
                'name'     => "Smoke alarm",
                'type'     => 'safety',
                'typeList' => 'home_safety'
            ],
            [
                'code'     => 'dedicated_worspace',
                'name'     => "Dedicated workspace",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'pocket_wifi',
                'name'     => "Pocket wifi",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'wifi',
                'name'     => "Wifi",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'baking_sheet',
                'name'     => "Baking sheet",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'barbecue_utensils',
                'name'     => "Barbecue utensils",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'breadmaker',
                'name'     => "Bread maker",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'blender',
                'name'     => "Blender",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'coffee',
                'name'     => "Coffee",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'coffeemaker',
                'name'     => "Coffee maker",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'cooking_basics',
                'name'     => "Cooking basics",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'diningtable',
                'name'     => "Dining table",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'dishes_silverware',
                'name'     => "Disher and silverware",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'dishwasher',
                'name'     => "Dishwasher",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'freezer',
                'name'     => "Freezer",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'hotwaterkettle',
                'name'     => "Hot water kettle",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'kitchen',
                'name'     => "Kitchen",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'microwave',
                'name'     => "Microwave",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'minifridge',
                'name'     => "Mini fridge",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'oven',
                'name'     => "Oven",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'refrigerator',
                'name'     => "Refrigerator",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'ricemaker',
                'name'     => "Rice maker",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'stove',
                'name'     => "Stove",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'toaster',
                'name'     => "Toaster",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'trashcompactor',
                'name'     => "Trash compactor",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'wineglasses',
                'name'     => "Wine glasses",
                'type'     => 'amenities',
                'typeList' => 'internetoffice'
            ],
            [
                'code'     => 'beachaccess',
                'name'     => "Beach access",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'lakeaccess',
                'name'     => "Lake access",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'laundromatnearby',
                'name'     => "Laundromat nearby",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'privateentrance',
                'name'     => "Private entrance",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'resortaccess',
                'name'     => "Resort access",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'ski-in/ski-out',
                'name'     => "Ski-in/Ski-out",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'waterfront',
                'name'     => "Waterfront",
                'type'     => 'amenities',
                'typeList' => 'location_feactures'
            ],
            [
                'code'     => 'backyard',
                'name'     => "Backyard",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'bbq_grill',
                'name'     => "BBQ grill",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'beachessentials',
                'name'     => "Beach essentials",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'bikes',
                'name'     => "Bikes",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'boatslip',
                'name'     => "Boat slip",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'fire_pit',
                'name'     => "Fire pit",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'hammock',
                'name'     => "Hammock",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'kayak',
                'name'     => "Kayak",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'outdoor_dining',
                'name'     => "Outdoor dining area",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'outdoorfurniture',
                'name'     => "Outdoor furniture",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'outdoorkitchen',
                'name'     => "Outdoor kitchen",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'patio',
                'name'     => "Patio or balcony",
                'type'     => 'amenities',
                'typeList' => 'Outdoor'
            ],
            [
                'code'     => 'elevator',
                'name'     => "Elevator",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'evcharger',
                'name'     => "EV charger",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'free_parking',
                'name'     => "Free parking on premises",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'freestreetparking',
                'name'     => "Free street parking",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'gym',
                'name'     => "Gym",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'hot_tub',
                'name'     => "Hot tub",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'paidoffpermises',
                'name'     => "Paid parking off permises",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'paid_parking',
                'name'     => "Paid parking on premises",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'pool',
                'name'     => "Pool",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'sauna',
                'name'     => "Sauna",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'singlelevelhome',
                'name'     => "Single level home",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities'
            ],
            [
                'code'     => 'breakfast',
                'name'     => "Breakfast",
                'type'     => 'amenities',
                'typeList' => 'Services'
            ],
            [
                'code'     => 'cleaningbeforecheckout',
                'name'     => "Cleaning before checkout",
                'type'     => 'amenities',
                'typeList' => 'Services'
            ],
            [
                'code'     => 'longstaysallowed',
                'name'     => "Long term stays allowed",
                'type'     => 'amenities',
                'typeList' => 'Services'
            ],
            [
                'code'     => 'luggagedropoffallowed',
                'name'     => "Luggage dropoff allowed",
                'type'     => 'amenities',
                'typeList' => 'Services'
            ],
        ];

        foreach( $roomsPropert AS $array )
            AmenitiesSafety::create( $array );
    }
}