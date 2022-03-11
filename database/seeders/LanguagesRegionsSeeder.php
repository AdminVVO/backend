<?php

namespace Database\Seeders;

use App\Models\LanguagesRegions;
use Illuminate\Database\Seeder;

class LanguagesRegionsSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        $countries = [
            [
                'code' => 'AF',
                'name' => 'Afghanistan',
                'native' => 'افغانستان',
                'currency' => 'AFN',
                'languages' => 'Pashto' 
            ],
            [
                'code' => 'CN',
                'name' => 'China',
                'native' => '中国',
                'currency' => 'CNY',
                'languages' => 'Chinese',
                'suggested' => true
            ],
            [
                'code' => 'CY',
                'name' => 'Cyprus',
                'native' => 'Κύπρος',
                'currency' => 'EUR',
                'languages' => 'Greek' 
            ],
            [
                'code' => 'ES',
                'name' => 'Spain',
                'native' => 'España',
                'currency' => 'EUR',
                'languages' => 'Spanish',
                'suggested' => true
            ],
            [
                'code' => 'HK',
                'name' => 'Hong Kong',
                'native' => '香港',
                'currency' => 'HKD',
                'languages' => 'Chinese' 
            ],
            [
                'code' => 'IT',
                'name' => 'Italy',
                'native' => 'Italia',
                'currency' => 'EUR',
                'languages' => 'Italian' 
            ],
            [
                'code' => 'JP',
                'name' => 'Japan',
                'native' => '日本',
                'currency' => 'JPY',
                'languages' => 'Japanese' 
            ],
            [
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'native' => 'Liechtenstein',
                'currency' => 'CHF',
                'languages' => 'German' 
            ],
            [
                'code' => 'NL',
                'name' => 'Netherlands',
                'native' => 'Nederland',
                'currency' => 'EUR',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'RU',
                'name' => 'Russia',
                'native' => 'Россия',
                'currency' => 'RUB',
                'languages' => 'Russian',
                'suggested' => true
            ],
            [
                'code' => 'EN',
                'name' => 'United States',
                'native' => 'United States',
                'currency' => 'USD',
                'languages' => 'English',
                'suggested' => true

            ],
            [
                'code' => 'ZA',
                'name' => 'South Africa',
                'native' => 'South Africa',
                'currency' => 'ZAR',
                'languages' => 'Afrikaans' 
            ],
        ];

        foreach( $countries AS $array )
            LanguagesRegions::create( $array );
    }
}
