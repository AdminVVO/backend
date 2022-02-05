<?php

namespace Database\Seeders;

use App\Models\Currencs;
use Illuminate\Database\Seeder;

class CurrencsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency = [
            [ "code" => "USD", "name" => "United States dollar", "symbol" => "$" ],
            [ "code" => "AFN", "name" => "Afghan afghani", "symbol" => "؋" ],
            [ "code" => "EUR", "name" => "Euro", "symbol" => "€" ],
            [ "code" => "ALL", "name" => "Albanian lek", "symbol" => "L" ],
            [ "code" => "DZD", "name" => "Algerian dinar", "symbol" => "د.ج" ],
            [ "code" => "AOA", "name" => "Angolan kwanza", "symbol" => "Kz" ],
            [ "code" => "AWG", "name" => "Aruban florin", "symbol" => "ƒ" ],
            [ "code" => "BHD", "name" => "Bahraini dinar", "symbol" => ".د.ب" ],
            [ "code" => "BDT", "name" => "Bangladeshi taka", "symbol" => "৳" ],
            [ "code" => "JPY", "name" => "Japanese yen", "symbol" => "¥" ],
            [ "code" => "RUB", "name" => "Russian ruble", "symbol" => "₽" ],
            [ "code" => "VEF", "name" => "Venezuelan bolívar", "symbol" => "Bs F" ],
        ];

        foreach( $currency AS $array )
            Currencs::create( $array );
    }
}
