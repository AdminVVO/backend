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
                'typeList' => 'bathroom',
                'file'     => 'fa-bath',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'bidet',
                'name'     => 'Bidet',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'fa-toilet',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'body_soap',
                'name'     => 'Body soap',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'fa-soap',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'cleaning_products',
                'name'     => 'Cleaning products',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'fa-vacuum',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'conditioner',
                'name'     => 'Conditioner',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'fa-air-conditioner',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'hair_dryer',
                'name'     => 'Hair dryer',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'hair-dryer.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'hot_water',
                'name'     => 'Hot water',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'fa-fire',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'outdoor_shower',
                'name'     => 'Outdoor shower',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'fa-shower',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'shampoo',
                'name'     => 'Shampoo',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'shampoo.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'shower_gel',
                'name'     => 'Shower gel',
                'type'     => 'amenities',
                'typeList' => 'bathroom',
                'file'     => 'shampoo.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'essentials',
                'name'     => 'Essentials',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'essentails.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'bed_linens',
                'name'     => 'Bed linens',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'bed-linens.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'clothing_storage',
                'name'     => 'Clothing storage',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'fa-container-storage',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'dryer',
                'name'     => 'Dryer',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'building.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'drying_clothing',
                'name'     => 'Drying rack for clothing',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'fa-shirt',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'extra_blankets',
                'name'     => 'Extra pillows and blankets',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'extra-pillows-and-blankets.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'hangers',
                'name'     => 'Hangers',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'fa-clothes-hanger',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'iron',
                'name'     => 'Iron',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'iron.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'mosquito_net',
                'name'     => 'Mosquito net',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'fa-mosquito',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'room_shades',
                'name'     => 'Room-darkening shades',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'fa-booth-curtain',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'safe',
                'name'     => 'Safe',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'fa-shield',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'washer',
                'name'     => 'Washer',
                'type'     => 'amenities',
                'typeList' => 'bedroom_laundry',
                'file'     => 'building.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'books_material',
                'name'     => 'Books and reading material',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'books-and-reading-material.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'ethernet_connection',
                'name'     => 'Ethernet connection',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'ethernet-connection.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'exercise_equipment',
                'name'     => 'Exercise equipment',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-dumbbell',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'game_console',
                'name'     => 'Game console',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-gamepad-modern',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'piano',
                'name'     => 'Piano',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-piano',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'pingpong_table',
                'name'     => 'Ping pong table',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-table-tennis-paddle-ball',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'pool',
                'name'     => 'Pool',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'pool.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'pool_table',
                'name'     => 'Pool table',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-pool-8-ball',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'record_player',
                'name'     => 'Record player',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-turntable',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'sound_system',
                'name'     => 'Sound system',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'fa-ear-listen',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'tv',
                'name'     => 'TV',
                'type'     => 'amenities',
                'typeList' => 'entertainment',
                'file'     => 'tv.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'baby_bath',
                'name'     => 'Baby bath',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-baby',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'baby_monitor',
                'name'     => 'Baby monitor',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-scanner-keyboard',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'baby_gates',
                'name'     => 'Baby safety gates',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-border-all',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'babysitter_recommendations',
                'name'     => 'Babysitter recommendations',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-person-breastfeeding',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'board_games',
                'name'     => 'Board games',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-chess',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'changing_table',
                'name'     => 'Changing table',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-bed-empty',
                'type_file' => 'icons'
            ],
            [
                'code'     => "childrens_toys",
                'name'     => "Children's books and toys",
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-books',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'childrens_dinnerware',
                'name'     => "Children's dinnerware",
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-plate-utensils',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'crib',
                'name'     => 'Crib',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-bed',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'fireplace_guards',
                'name'     => 'Fireplace guards',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-chimney',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'high_chair',
                'name'     => 'High chair',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-person-seat',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'outlet_covers',
                'name'     => 'Outlet covers',
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-outlet',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'packn_crib',
                'name'     => "Pack'n play/Traver crib",
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-tent',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'table_guards',
                'name'     => "Table corner guards",
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-border-bottom-right',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'window_guards',
                'name'     => "Window guards",
                'type'     => 'amenities',
                'typeList' => 'Family',
                'file'     => 'fa-blinds-raised',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'air_conditioning',
                'name'     => "Air conditioning",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling',
                'file'     => 'air-conditioning.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'ceiling_fan',
                'name'     => "Ceiling fan",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling',
                'file'     => 'fa-fan',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'heating',
                'name'     => "Heating",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling',
                'file'     => 'fa-temperature-high',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'indoor_fireplace',
                'name'     => "Indoor fireplace",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling',
                'file'     => 'fa-fireplace',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'portable_fans',
                'name'     => "Portable fans",
                'type'     => 'amenities',
                'typeList' => 'heating_cooling',
                'file'     => 'fa-fan-table',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'monoxide_alarm',
                'name'     => "Carbon monoxide alarm",
                'type'     => 'safety',
                'typeList' => 'home_safety',
                'file'     => 'carbon-monoxide-alarm.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'fire_extinguisher',
                'name'     => "Fire extinguisher",
                'type'     => 'safety',
                'typeList' => 'home_safety',
                'file'     => 'fa-fire-extinguisher',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'first_kit',
                'name'     => "First aid kit",
                'type'     => 'safety',
                'typeList' => 'home_safety',
                'file'     => 'fa-kit-medical',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'smoke_alarm',
                'name'     => "Smoke alarm",
                'type'     => 'safety',
                'typeList' => 'home_safety',
                'file'     => 'smoke-alarm.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'dedicated_worspace',
                'name'     => "Dedicated workspace",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-computer',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'pocket_wifi',
                'name'     => "Pocket wifi",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-router',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'wifi',
                'name'     => "Wifi",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'wifi.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'baking_sheet',
                'name'     => "Baking sheet",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-fire-burner',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'barbecue_utensils',
                'name'     => "Barbecue utensils",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-fork-knife',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'breadmaker',
                'name'     => "Bread maker",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-bread-slice',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'blender',
                'name'     => "Blender",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-blender',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'coffee',
                'name'     => "Coffee",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-coffee-pot',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'coffeemaker',
                'name'     => "Coffee maker",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-cup-togo',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'cooking_basics',
                'name'     => "Cooking basics",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-utensils',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'diningtable',
                'name'     => "Dining table",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'dining-table.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'dishes_silverware',
                'name'     => "Disher and silverware",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-plate-utensils',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'dishwasher',
                'name'     => "Dishwasher",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'dishwasher.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'freezer',
                'name'     => "Freezer",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-refrigerator',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'hotwaterkettle',
                'name'     => "Hot water kettle",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'hot-water-kettle.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'kitchen',
                'name'     => "Kitchen",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'kitchen.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'microwave',
                'name'     => "Microwave",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-microwave',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'minifridge',
                'name'     => "Mini fridge",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-refrigerator',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'oven',
                'name'     => "Oven",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-oven',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'refrigerator',
                'name'     => "Refrigerator",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-refrigerator',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'ricemaker',
                'name'     => "Rice maker",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'rice-maker.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'stove',
                'name'     => "Stove",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'stove.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'toaster',
                'name'     => "Toaster",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'toaster.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'trashcompactor',
                'name'     => "Trash compactor",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-trash',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'wineglasses',
                'name'     => "Wine glasses",
                'type'     => 'amenities',
                'typeList' => 'internetoffice',
                'file'     => 'fa-wine-glass',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'beachaccess',
                'name'     => "Beach access",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'fa-umbrella-beach',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'lakeaccess',
                'name'     => "Lake access",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'lake.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'laundromatnearby',
                'name'     => "Laundromat nearby",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'laundromat-nearby.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'privateentrance',
                'name'     => "Private entrance",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'private-entrance.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'resortaccess',
                'name'     => "Resort access",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'fa-sailboat',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'ski-in/ski-out',
                'name'     => "Ski-in/Ski-out",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'fa-person-skiing',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'waterfront',
                'name'     => "Waterfront",
                'type'     => 'amenities',
                'typeList' => 'location_feactures',
                'file'     => 'fa-water-arrow-up',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'backyard',
                'name'     => "Backyard",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-flower-daffodil',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'bbq_grill',
                'name'     => "BBQ grill",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'bbg-grill.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'beachessentials',
                'name'     => "Beach essentials",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-table-picnic',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'bikes',
                'name'     => "Bikes",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-person-biking',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'boatslip',
                'name'     => "Boat slip",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-ship',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'fire_pit',
                'name'     => "Fire pit",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fire-pit.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'hammock',
                'name'     => "Hammock",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-tents',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'kayak',
                'name'     => "Kayak",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-sailboat',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'outdoor_dining',
                'name'     => "Outdoor dining area",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-table-picnic',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'outdoorfurniture',
                'name'     => "Outdoor furniture",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'outdoor-furniture.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'outdoorkitchen',
                'name'     => "Outdoor kitchen",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'outdoor-furniture.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'patio',
                'name'     => "Patio or balcony",
                'type'     => 'amenities',
                'typeList' => 'Outdoor',
                'file'     => 'fa-plate-wheat',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'elevator',
                'name'     => "Elevator",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'elevator.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'evcharger',
                'name'     => "EV charger",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-charging-station',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'free_parking',
                'name'     => "Free parking on premises",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'free-parking.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'freestreetparking',
                'name'     => "Free street parking",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-car',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'gym',
                'name'     => "Gym",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-dumbbell',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'hot_tub',
                'name'     => "Hot tub",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'hot-tub.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'paidoffpermises',
                'name'     => "Paid parking off permises",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-circle-dollar-to-slot',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'paid_parking',
                'name'     => "Paid parking on premises",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-money-bills',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'pool',
                'name'     => "Pool",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'pool.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'sauna',
                'name'     => "Sauna",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-hot-tub-person',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'singlelevelhome',
                'name'     => "Single level home",
                'type'     => 'amenities',
                'typeList' => 'parking_facilities',
                'file'     => 'fa-house-user',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'breakfast',
                'name'     => "Breakfast",
                'type'     => 'amenities',
                'typeList' => 'Services',
                'file'     => 'fa-mug-saucer',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'cleaningbeforecheckout',
                'name'     => "Cleaning before checkout",
                'type'     => 'amenities',
                'typeList' => 'Services',
                'file'     => 'cleaning-before-checkout.svg',
                'type_file' => 'svg'
            ],
            [
                'code'     => 'longstaysallowed',
                'name'     => "Long term stays allowed",
                'type'     => 'amenities',
                'typeList' => 'Services',
                'file'     => 'fa-calendar',
                'type_file' => 'icons'
            ],
            [
                'code'     => 'luggagedropoffallowed',
                'name'     => "Luggage dropoff allowed",
                'type'     => 'amenities',
                'typeList' => 'Services',
                'file'     => 'fa-briefcase-arrow-right',
                'type_file' => 'icons'
            ],
        ];

        foreach( $roomsPropert AS $array )
            AmenitiesSafety::create( $array );
    }
}