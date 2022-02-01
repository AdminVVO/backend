<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use Illuminate\Database\Seeder;

class AccommodationSeeder extends Seeder
{
    public function run()
    {
        $hotels[] = [
            "type"              => "hotel",
            "name"              => "Motif Seattle",
            "address1"          => "1415 5th Ave",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.60985,
            "longitude"         => -122.33475,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.168453,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "3.jpg",
                1 => "5.jpg",
                2 => "1.jpg",
            ],
            "tripAdvisorRating" => 3.5,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "The Westin Seattle",
            "address1"          => "1900 5th Ave",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.61309,
            "longitude"         => -122.33788,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.335604,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "3.jpg",
                1 => "4.jpg",
                2 => "5.jpg",
            ],
            "tripAdvisorRating" => 4,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "Sheraton Seattle Hotel",
            "address1"          => "1400 6th Ave",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.61017,
            "longitude"         => -122.33357,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.115907,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "10.jpg",
                1 => "2.jpg",
                2 => "3.jpg",
            ],
            "tripAdvisorRating" => 4,

        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "The Edgewater - A Noble House Hotel",
            "address1"          => "Pier 67, 2411 Alaskan Way",
            "city"              => "Burlingame",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.61252,
            "longitude"         => -122.35013,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.898841,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "7.jpg",
                1 => "8.jpg",
                2 => "9.jpg",
            ],
            "tripAdvisorRating" => 4,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "Hotel Max, a Provenance Hotel",
            "address1"          => "620 Stewart St",
            "city"              => "Burlingame",
            "countryCode"       => "US",
            "hotelRating"       => 3.5,
            "latitude"          => 47.61381,
            "longitude"         => -122.33686,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.293709,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "4.jpg",
                1 => "5.jpg",
                2 => "6.jpg",
            ],
            "tripAdvisorRating" => 4,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "Hotel Monaco Seattle, a Kimpton Hotel",
            "address1"          => "1101 4th Ave",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.60682,
            "longitude"         => -122.33358,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.097676,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "1.jpg",
                1 => "2.jpg",
                2 => "3.jpg",
            ],
            "tripAdvisorRating" => 4.5,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "Hotel Deca - A Noble House Hotel",
            "address1"          => "4507 Brooklyn Avenue NE",
            "city"              => "Burlingame",
            "countryCode"       => "US",
            "hotelRating"       => 3.5,
            "latitude"          => 47.66143,
            "longitude"         => -122.31429,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.145046,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "6.jpg",
                1 => "7.jpg",
                2 => "8.jpg",
            ],
            "tripAdvisorRating" => 4,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "W Seattle",
            "address1"          => "1112 4th Ave",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.60688,
            "longitude"         => -122.33361,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.09939,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "16950_158_t.jpg",
                1 => "11133_169_t.jpg",
                2 => "19023_103_t.jpg",
            ],
            "tripAdvisorRating" => 4,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "Hotel Andra",
            "address1"          => "2000 4th Ave",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 4,
            "latitude"          => 47.61318,
            "longitude"         => -122.34009,
            "propertyCategory"  => 1,
            "proximityDistance" => 11.438348,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "3.jpg",
                1 => "4.jpg",
                2 => "5.jpg",
            ],
            "tripAdvisorRating" => 4.5,
        ];

        $hotels[] = [
            "type"              => "hotel",
            "name"              => "The Maxwell Hotel - Pineapple Hospitality",
            "address1"          => "300 Roy St",
            "city"              => "Seattle",
            "countryCode"       => "US",
            "hotelRating"       => 3,
            "latitude"          => 47.62561,
            "longitude"         => -122.35129,
            "propertyCategory"  => 1,
            "proximityDistance" => 12.074359,
            "rateCurrencyCode"  => "USD",
            "thumbNailUrl"      => [
                0 => "1.jpg",
                1 => "2.jpg",
                2 => "3.jpg",
            ],
            "tripAdvisorRating" => 4.5,
        ];


        foreach( $hotels AS $array )
            Accommodation::create( $array );


            // DB::table('accounts')->insert( $array );
    }
}
