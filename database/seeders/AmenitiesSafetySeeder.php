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
                'code' => 'cleaning_products',
                'name' => 'Cleaning products',
                'type' => 'amenities'
            ],
            [
                'code' => 'cooking_basics',
                'name' => 'Cooking basics',
                'type' => 'amenities'
            ],
            [
                'code' => 'dishes_silverware',
                'name' => 'Dishes and silverware',
                'type' => 'amenities'
            ],
            [
                'code' => 'bathtub',
                'name' => 'Bathtub',
                'type' => 'amenities'
            ],
            [
                'code' => 'bidet',
                'name' => 'Bidet',
                'type' => 'amenities'
            ],
            [
                'code' => 'body_soap',
                'name' => 'Body soap',
                'type' => 'amenities'
            ],
            [
                'code' => 'conditioner',
                'name' => 'Conditioner',
                'type' => 'amenities'
            ],
            [
                'code' => 'shower_gel',
                'name' => 'Shower gel',
                'type' => 'amenities'
            ],
            [
                'code' => 'bed_linens',
                'name' => 'Bed linens',
                'type' => 'amenities'
            ],
            [
                'code' => 'clothing_storage',
                'name' => 'Clothing storage',
                'type' => 'amenities'
            ],
            [
                'code' => 'drying_clothing',
                'name' => 'Drying rack for clothing',
                'type' => 'amenities'
            ],
            [
                'code' => 'extra_blankets',
                'name' => 'Extra pillows and blankets',
                'type' => 'amenities'
            ],
            [
                'code' => 'mosquito_net',
                'name' => 'Mosquito net',
                'type' => 'amenities'
            ],
            [
                'code' => 'room_shades',
                'name' => 'Room-darkening shades',
                'type' => 'amenities'
            ],
            [
                'code' => 'safe',
                'name' => 'Safe',
                'type' => 'amenities'
            ],
            [
                'code' => 'books_material',
                'name' => 'Books and reading material',
                'type' => 'amenities'
            ],
            [
                'code' => 'ethernet_connection',
                'name' => 'Ethernet connection',
                'type' => 'amenities'
            ],
            [
                'code' => 'exercise_equipment',
                'name' => 'Exercise equipment',
                'type' => 'amenities'
            ],
            [
                'code' => 'game_console',
                'name' => 'Game console',
                'type' => 'amenities'
            ],
            [
                'code' => 'piano',
                'name' => 'Piano',
                'type' => 'amenities'
            ],
            [
                'code' => 'pingpong_table',
                'name' => 'Ping pong table',
                'type' => 'amenities'
            ],
            [
                'code' => 'record_player',
                'name' => 'Record player',
                'type' => 'amenities'
            ],
            [
                'code' => 'sound_system',
                'name' => 'Sound system',
                'type' => 'amenities'
            ],
            [
                'code' => 'baby_bath',
                'name' => 'Baby bath',
                'type' => 'amenities'
            ],
            [
                'code' => 'baby_monitor',
                'name' => 'Baby monitor',
                'type' => 'amenities'
            ],
            [
                'code' => 'baby_gates',
                'name' => 'Baby safety gates',
                'type' => 'amenities'
            ],
            [
                'code' => 'babysitter_recommendations',
                'name' => 'Babysitter recommendations',
                'type' => 'amenities'
            ],
            [
                'code' => 'board_games',
                'name' => 'Board games',
                'type' => 'amenities'
            ],
            [
                'code' => 'changing_table',
                'name' => 'Changing table',
                'type' => 'amenities'
            ],
            [
                'code' => 'childrens_toys',
                'name' => "Children's books and toys",
                'type' => 'amenities'
            ],
            [
                'code' => 'childrens_dinnerware',
                'name' => "Children's dinnerware",
                'type' => 'amenities'
            ],
            [
                'code' => 'crib',
                'name' => 'Crib',
                'type' => 'amenities'
            ],
            [
                'code' => 'fireplace_guards',
                'name' => 'Fireplace guards',
                'type' => 'amenities'
            ],
            [
                'code' => 'high_chair',
                'name' => 'High chair',
                'type' => 'amenities'
            ],
            [
                'code' => 'outlet_covers',
                'name' => 'Outlet covers',
                'type' => 'amenities'
            ],
            [
                'code' => 'packn_crib',
                'name' => "Pack'n play/Traver crib",
                'type' => 'amenities'
            ],
            [
                'code' => 'table_guards',
                'name' => 'Table corner guards',
                'type' => 'amenities'
            ],
            [
                'code' => 'window_guards',
                'name' => 'Window guards',
                'type' => 'amenities'
            ],
            [
                'code' => 'ceiling_fan',
                'name' => 'Ceiling fan',
                'type' => 'amenities'
            ],
            [
                'code' => 'indoor_fireplace',
                'name' => 'Indoor fireplace',
                'type' => 'amenities'
            ],
            [
                'code' => 'portable_fans',
                'name' => 'Portable fans',
                'type' => 'amenities'
            ],
            [
                'code' => 'pocket_wifi',
                'name' => 'Pocket wifi',
                'type' => 'amenities'
            ],
            [
                'code' => 'baking_sheet',
                'name' => 'Baking sheet',
                'type' => 'amenities'
            ],
            [
                'code' => 'barbecue_utensils',
                'name' => 'Barbecue utensils',
                'type' => 'amenities'
            ],
            [
                'code' => 'breadmaker',
                'name' => 'Bread maker',
                'type' => 'amenities'
            ],
            [
                'code' => 'blender',
                'name' => 'Blender',
                'type' => 'amenities'
            ],
            [
                'code' => 'coffee',
                'name' => 'Coffee',
                'type' => 'amenities'
            ],
            [
                'code' => 'coffeemaker',
                'name' => 'Coffee maker',
                'type' => 'amenities'
            ],
            [
                'code' => 'diningtable',
                'name' => 'Dining table',
                'type' => 'amenities'
            ],
            [
                'code' => 'dishersilverware',
                'name' => 'Disher and silverware',
                'type' => 'amenities'
            ],
            [
                'code' => 'dishwasher',
                'name' => 'Dishwasher',
                'type' => 'amenities'
            ],
            [
                'code' => 'freezer',
                'name' => 'Freezer',
                'type' => 'amenities'
            ],
            [
                'code' => 'hotwaterkettle',
                'name' => 'Hot water kettle',
                'type' => 'amenities'
            ],
            [
                'code' => 'microwave',
                'name' => 'Microwave',
                'type' => 'amenities'
            ],
            [
                'code' => 'minifridge',
                'name' => 'Mini fridge',
                'type' => 'amenities'
            ],
            [
                'code' => 'oven',
                'name' => 'Oven',
                'type' => 'amenities'
            ],
            [
                'code' => 'refrigerator',
                'name' => 'Refrigerator',
                'type' => 'amenities'
            ],
            [
                'code' => 'ricemaker',
                'name' => 'Rice maker',
                'type' => 'amenities'
            ],
            [
                'code' => 'stove',
                'name' => 'Stove',
                'type' => 'amenities'
            ],
            [
                'code' => 'toaster',
                'name' => 'Toaster',
                'type' => 'amenities'
            ],
            [
                'code' => 'trashcompactor',
                'name' => 'Trash compactor',
                'type' => 'amenities'
            ],
            [
                'code' => 'wineglasses',
                'name' => 'Wine glasses',
                'type' => 'amenities'
            ],
            [
                'code' => 'beachaccess',
                'name' => 'Beach access',
                'type' => 'amenities'
            ],
            [
                'code' => 'lakeaccess',
                'name' => 'Lake access',
                'type' => 'amenities'
            ],
            [
                'code' => 'laundromatnearby',
                'name' => 'Laundromat nearby',
                'type' => 'amenities'
            ],
            [
                'code' => 'privateentrance',
                'name' => 'Private entrance',
                'type' => 'amenities'
            ],
            [
                'code' => 'resortaccess',
                'name' => 'Resort access',
                'type' => 'amenities'
            ],
            [
                'code' => 'ski',
                'name' => 'Ski-in/Ski-out',
                'type' => 'amenities'
            ],
            [
                'code' => 'waterfront',
                'name' => 'Waterfront',
                'type' => 'amenities'
            ],
            [
                'code' => 'backyard',
                'name' => 'Backyard',
                'type' => 'amenities'
            ],
            [
                'code' => 'beachessentials',
                'name' => 'Beach essentials',
                'type' => 'amenities'
            ],
            [
                'code' => 'bikes',
                'name' => 'Bikes',
                'type' => 'amenities'
            ],
            [
                'code' => 'boatslip',
                'name' => 'Boat slip',
                'type' => 'amenities'
            ],
            [
                'code' => 'hammock',
                'name' => 'Hammock',
                'type' => 'amenities'
            ],
            [
                'code' => 'kayak',
                'name' => 'Kayak',
                'type' => 'amenities'
            ],
            [
                'code' => 'outdoorfurniture',
                'name' => 'Outdoor furniture',
                'type' => 'amenities'
            ],
            [
                'code' => 'outdoorkitchen',
                'name' => 'Outdoor kitchen',
                'type' => 'amenities'
            ],
            [
                'code' => 'elevator',
                'name' => 'Elevator',
                'type' => 'amenities'
            ],
            [
                'code' => 'evcharger',
                'name' => 'EV charger',
                'type' => 'amenities'
            ],
            [
                'code' => 'freestreetparking',
                'name' => 'Free street parking',
                'type' => 'amenities'
            ],
            [
                'code' => 'paidoffpermises',
                'name' => 'Paid parking off permises',
                'type' => 'amenities'
            ],
            [
                'code' => 'sauna',
                'name' => 'Sauna',
                'type' => 'amenities'
            ],
            [
                'code' => 'singlelevelhome',
                'name' => 'Single level home',
                'type' => 'amenities'
            ],
            [
                'code' => 'breakfast',
                'name' => 'Breakfast',
                'type' => 'amenities'
            ],
            [
                'code' => 'cleaningbeforecheckout',
                'name' => 'Cleaning before checkout',
                'type' => 'amenities'
            ],
            [
                'code' => 'longstaysallowed',
                'name' => 'Long term stays allowed',
                'type' => 'amenities'
            ],
            [
                'code' => 'luggagedropoffallowed',
                'name' => 'Luggage dropoff allowed',
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