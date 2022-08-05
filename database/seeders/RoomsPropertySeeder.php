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
                'name_type' => 'Apartments',
                'file' => 's1.jpg',
                'comment' => 'A rented place within a multi-unit residential building or complex.',
                'file_comm' => 'next1.jpg'
            ],
            [
                'code' => 'condominiun',
                'name' => 'Condominium (Condo)',
                'type' => 'apartment',
                'name_type' => 'Apartments',
                'file' => 's1.jpg',
                'comment' => 'A place within a multi-unit building or complex owned by the residents.',
                'file_comm' => 'next2.jpg'
            ],
            [
                'code' => 'serviced_apartm',
                'name' => 'Serviced apartment',
                'type' => 'apartment',
                'name_type' => 'Apartments',
                'file' => 's1.jpg',
                'comment' => 'An apartment with hotel-like amenities serviced by a professional management company.',
                'file_comm' => 'next3.jpg'
            ],
            [
                'code' => 'loft',
                'name' => 'Loft',
                'type' => 'apartment',
                'name_type' => 'Apartments',
                'file' => 's1.jpg',
                'comment' => 'An open layout apartment or condo, which may have short interior walls.',
                'file_comm' => 'next4.jpg'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'apartment',
                'name_type' => 'Apartments',
                'file' => 's1.jpg',
                'comment' => 'A furnished rental property that includes a kitchen and bathroom and may offer some guest services, like a reception desk.',
                'file_comm' => 'next5.jpg'
            ],
            [
                'code' => 'residential_home',
                'name' => 'Residential Home',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A home that may stand-alone or have shared walls.',
                'file_comm' => 'next6.jpg'
            ],
            [
                'code' => 'cabin',
                'name' => 'Cabin',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A house made with natural materials like wood and built in a natural setting.',
                'file_comm' => 'next7.jpg'
            ],
            [
                'code' => 'villa',
                'name' => 'Villa',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A luxury home that may have indoor-outdoor spaces, gardens, and pools.',
                'file_comm' => 'next8.jpg'
            ],
            [
                'code' => 'townhouse',
                'name' => 'Townhouse',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A row or terrace house that may have shared walls and outdoor spaces.',
                'file_comm' => 'next9.jpg'
            ],
            [
                'code' => 'cottage',
                'name' => 'Cottage',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A cozy house built in a rural area or near a lake or beach.',
                'file_comm' => 'next10.jpg'
            ],
            [
                'code' => 'bungalow',
                'name' => 'Bungalow',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A single-level house with a wide front porch and a sloping roof.',
                'file_comm' => 'next11.jpg'
            ],
            [
                'code' => 'earth_house',
                'name' => 'Earth House',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A home built in the ground or made from materials like rammed earth.',
                'file_comm' => 'next13.jpg'
            ],
            [
                'code' => 'houseboat',
                'name' => 'Houseboat',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A home that floats, which can be a boat used as a residence or a house.',
                'file_comm' => 'next14.jpg'
            ],
            [
                'code' => 'hut',
                'name' => 'Hut',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A home made of wood or mud that may have a thatched straw roof.',
                'file_comm' => 'next15.jpg'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A rural stay where guests may spend time with animals, hiking, or crafting.',
                'file_comm' => 'next16.jpg'
            ],
            [
                'code' => 'dome_house',
                'name' => 'Dome house',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A home with a domed roof or spherical shape, such as a bubble home.',
                'file_comm' => 'next17.jpg'
            ],
            [
                'code' => 'chalet',
                'name' => 'Chalet',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A wooden house with a sloped roof popular for skiing or summer stays.',
                'file_comm' => 'next18.jpg'
            ],
            [
                'code' => 'lighthouse',
                'name' => 'Lighthouse',
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A tower near water with a bright light that helps to guide ships.',
                'file_comm' => 'next19.jpg'
            ],
            [
                'code' => 'shepherds_hut',
                'name' => "Shepherd's hut",
                'type' => 'house',
                'name_type' => 'House',
                'file' => 's2.jpg',
                'comment' => 'A tiny wagon on wheels originally used to follow sheep herds.',
                'file_comm' => 'next20.jpg'
            ],
            [
                'code' => 'guesthouse',
                'name' => 'Guesthouse',
                'type' => 'secondary',
                'name_type' => 'Secondary unit',
                'file' => 's3.jpg',
                'comment' => 'A carriage house or coach house that shares land with a main building.',
                'file_comm' => 'next21.jpg'
            ],
            [
                'code' => 'guest_suite',
                'name' => 'Guest Suite',
                'type' => 'secondary',
                'name_type' => 'Secondary unit',
                'file' => 's3.jpg',
                'comment' => 'A carriage house or coach house that shares land with a main building.',
                'file_comm' => 'next22.jpg'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'secondary',
                'name_type' => 'Secondary unit',
                'file' => 's3.jpg',
                'comment' => 'A rural stay where guests may spend time with animals, hiking, or crafting.',
                'file_comm' => 'next23.jpg'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'secondary',
                'name_type' => 'Secondary unit',
                'file' => 's3.jpg',
                'comment' => 'A furnished rental property that includes a kitchen and bathroom and may offer some guest services, like a reception desk.',
                'file_comm' => 'next5.jpg'
            ],
            [
                'code' => 'barn',
                'name' => 'Barn',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A converted space in a building used for grain, livestock, or farming.',
                'file_comm' => 'next24.jpg'
            ],
            [
                'code' => 'boat',
                'name' => 'Boat',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A boat, sailboat, or yacht moored during guest visits. Not a houseboat.',
                'file_comm' => 'next25.jpg'
            ],
            [
                'code' => 'bus',
                'name' => 'Bus',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A converted multi-passenger vehicle with a creatively reimagined interior.',
                'file_comm' => 'next26.jpg'
            ],
            [
                'code' => 'camper_rv',
                'name' => 'Camper/RV',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => "A motor home or camping trailer that's half-home and half-vehicle.",
                'file_comm' => 'next27.jpg'
            ],
            [
                'code' => 'treehouse',
                'name' => 'Treehouse',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A place to stay built into the trunk or branches of a tree.',
                'file_comm' => 'next28.jpg'
            ],
            [
                'code' => 'campsite',
                'name' => 'Campsite',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'An area of land where guests can set up a tent, yurt, RV, or tiny house.',
                'file_comm' => 'next29.jpg'
            ],
            [
                'code' => 'castle',
                'name' => 'Castle',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A majestic, possibly historical building that may have towers and moats.',
                'file_comm' => 'next30.jpg'
            ],
            [
                'code' => 'dome_house',
                'name' => 'Dome House',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A home with a domed roof or spherical shape, such as a bubble home.',
                'file_comm' => 'next16.jpg'
            ],
            [
                'code' => 'earth_house',
                'name' => 'Earth House',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A home built in the ground or made from materials like rammed earth.',
                'file_comm' => 'next12.jpg'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A rural stay where guests may spend time with animals, hiking, or crafting.',
                'file_comm' => 'next15.jpg'
            ],
            [
                'code' => 'houseboat',
                'name' => 'Houseboat',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A home that floats, which can be a boat used as a residence or a house.',
                'file_comm' => 'next13.jpg'
            ],
            [
                'code' => 'hut',
                'name' => 'Hut',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A home made of wood or mud that may have a thatched straw roof.',
                'file_comm' => 'next14.jpg'
            ],
            [
                'code' => 'island',
                'name' => 'Island',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A piece of land surrounded by water.',
                'file_comm' => 'next31.jpg'
            ],
            [
                'code' => 'lighthouse',
                'name' => 'Lighthouse',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A tower near water with a bright light that helps to guide ships.',
                'file_comm' => 'next19.jpg'
            ],
            [
                'code' => 'plane',
                'name' => 'Plane',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => "An aircraft that's been converted into a place to stay.",
                'file_comm' => 'next32.jpg'
            ],
            [
                'code' => 'ranch',
                'name' => 'Ranch',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A home on a large area of land used to raise livestock or crops.',
                'file_comm' => 'next33.jpg'
            ],
            [
                'code' => 'religious_building',
                'name' => 'Religious Building',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A converted space in a former place of worship like a church or mosque.',
                'file_comm' => 'xnext34.jpgxxx'
            ],
            [
                'code' => 'shepherds',
                'name' => "Shepherd's",
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A tiny wagon on wheels originally used to follow sheep herds.',
                'file_comm' => 'next19.jpg'
            ],
            [
                'code' => 'shipping_container',
                'name' => 'Shipping Container',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A converted steel container once used to transport goods.',
                'file_comm' => 'next35.jpg'
            ],
            [
                'code' => 'tent',
                'name' => 'Tent',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A usually portable, collapsible structure made from fabric and poles.',
                'file_comm' => 'next36.jpg'
            ],
            [
                'code' => 'tiny_house',
                'name' => 'Tiny House',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => "A stand-alone house that's usually less than 400 square feet.",
                'file_comm' => 'next20.jpg'
            ],
            [
                'code' => 'tower',
                'name' => 'Tower',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => "A free-standing structure that's several stories tall with a view.",
                'file_comm' => 'next37.jpg'
            ],
            [
                'code' => 'train',
                'name' => 'Train',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A caboose, boxcar, or other railroad car converted to a living space.',
                'file_comm' => 'next38.jpg'
            ],
            [
                'code' => 'windmill',
                'name' => 'Windmill',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A structure with sails or blades used for wind power that has a living space.',
                'file_comm' => 'next39.jpg'
            ],
            [
                'code' => 'vacation_home',
                'name' => 'Vacation Home',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'A furnished rental property that includes a kitchen and bathroom and may offer some guest services, like a reception desk.',
                'file_comm' => 'next5.jpg'
            ],
            [
                'code' => 'other',
                'name' => 'Other',
                'type' => 'unique',
                'name_type' => 'Unique space',
                'file' => 's4.jpg',
                'comment' => 'Other',
                'file_comm' => 'icon'
            ],
            [
                'code' => 'bed_breakfast',
                'name' => 'Bed and Breakfast',
                'type' => 'breakfast',
                'name_type' => 'Bad and breakfast',
                'file' => 's5.jpg',
                'comment' => 'A hospitality business offering guests breakfast with a host on-site.',
                'file_comm' => 'next40.jpg'
            ],
            [
                'code' => 'nature_lodge',
                'name' => 'Nature Lodge',
                'type' => 'breakfast',
                'name_type' => 'Bad and breakfast',
                'file' => 's5.jpg',
                'comment' => 'A business offering stays near natural settings like forests or mountains.',
                'file_comm' => 'next41.jpg'
            ],
            [
                'code' => 'farm_stay',
                'name' => 'Farm Stay',
                'type' => 'breakfast',
                'name_type' => 'Bad and breakfast',
                'file' => 's5.jpg',
                'comment' => 'A rural stay where guests may spend time with animals, hiking, or crafting.',
                'file_comm' => 'next23.jpg'
            ],
            [
                'code' => 'hotel',
                'name' => 'Hotel',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => 'A converted space in a building used for grain, livestock, or farming.',
                'file_comm' => 'next42.jpg'
            ],
            [
                'code' => 'boat',
                'name' => 'Boat',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => 'A boat, sailboat, or yacht moored during guest visits. Not a houseboat.',
                'file_comm' => 'next43.jpg'
            ],
            [
                'code' => 'resort',
                'name' => 'Resort',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => 'A converted multi-passenger vehicle with a creatively reimagined interior.',
                'file_comm' => 'next44.jpg'
            ],
            [
                'code' => 'camper_rv',
                'name' => 'Camper/RV',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => "A motor home or camping trailer that's half-home and half-vehicle.",
                'file_comm' => 'next45.jpg'
            ],
            [
                'code' => 'treehouse',
                'name' => 'Treehouse',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => 'A place to stay built into the trunk or branches of a tree.',
                'file_comm' => 'next46.jpg'
            ],
            [
                'code' => 'campsite',
                'name' => 'Campsite',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => 'An area of land where guests can set up a tent, yurt, RV, or tiny house.',
                'file_comm' => 'next47.jpg'
            ],
            [
                'code' => 'castle',
                'name' => 'Castle',
                'type' => 'boutique',
                'name_type' => 'Boutique hotel',
                'file' => 's6.jpg',
                'comment' => 'A majestic, possibly historical building that may have towers and moats.',
                'file_comm' => 'next48.jpg'
            ],
        ];

        foreach( $roomsPropert AS $array )
            RoomsProperty::create( $array );
    }
}



