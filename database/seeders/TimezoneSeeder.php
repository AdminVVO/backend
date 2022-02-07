<?php

namespace Database\Seeders;

use App\Models\Timezone;
use Illuminate\Database\Seeder;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timezone = [
            [
                "offset"        => "UTC-11:00",
                "name"          => "Midway Island",
                "diff_from_gtm" => "Pacific/Midway",
            ],
            [
                "offset"        => "UTC-11:00",
                "name"          => "Samoa",
                "diff_from_gtm" => "Pacific/Samoa",
            ],
            [
                "offset"        => "UTC-10:00",
                "name"          => "Hawaii",
                "diff_from_gtm" => "Pacific/Honolulu",
            ],
            [
                "offset"        => "UTC-09:00",
                "name"          => "Alaska",
                "diff_from_gtm" => "US/Alaska",
            ],
            [
                "offset"        => "UTC-08:00",
                "name"          => "Pacific Time (US Canada)",
                "diff_from_gtm" => "America/Los_Angeles",
            ],
            [
                "offset"        => "UTC-08:00",
                "name"          => "Tijuana",
                "diff_from_gtm" => "America/Tijuana",
            ],
            [
                "offset"        => "UTC-07:00",
                "name"          => "Arizona",
                "diff_from_gtm" => "US/Arizona",
            ],
            [
                "offset"        => "UTC-07:00",
                "name"          => "Chihuahua",
                "diff_from_gtm" => "America/Chihuahua",
            ],
            [
                "offset"        => "UTC-07:00",
                "name"          => "La Paz",
                "diff_from_gtm" => "America/Chihuahua",
            ],
            [
                "offset"        => "UTC-07:00",
                "name"          => "Mazatlan",
                "diff_from_gtm" => "America/Mazatlan",
            ],
            [
                "offset"        => "UTC-07:00",
                "name"          => "Mountain Time (US Canada)",
                "diff_from_gtm" => "US/Mountain",
            ],
            [
                "offset"        => "UTC-06:00",
                "name"          => "Central America",
                "diff_from_gtm" => "America/Managua",
            ],
            [
                "offset"        => "UTC-06:00",
                "name"          => "Central Time (US Canada)",
                "diff_from_gtm" => "US/Central",
            ],
            [
                "offset"        => "UTC-06:00",
                "name"          => "Guadalajara",
                "diff_from_gtm" => "America/Mexico_City",
            ],
            [
                "offset"        => "UTC-06:00",
                "name"          => "Mexico City",
                "diff_from_gtm" => "America/Mexico_City",
            ],
            [
                "offset"        => "UTC-06:00",
                "name"          => "Monterrey",
                "diff_from_gtm" => "America/Monterrey",
            ],
            [
                "offset"        => "UTC-06:00",
                "name"          => "Saskatchewan",
                "diff_from_gtm" => "Canada/Saskatchewan",
            ],
            [
                "offset"        => "UTC-05:00",
                "name"          => "Bogota",
                "diff_from_gtm" => "America/Bogota",
            ],
            [
                "offset"        => "UTC-05:00",
                "name"          => "Eastern Time (US Canada)",
                "diff_from_gtm" => "US/Eastern",
            ],
            [
                "offset"        => "UTC-05:00",
                "name"          => "Indiana (East)",
                "diff_from_gtm" => "US/East-Indiana",
            ],
            [
                "offset"        => "UTC-05:00",
                "name"          => "Lima",
                "diff_from_gtm" => "America/Lima",
            ],
            [
                "offset"        => "UTC-05:00",
                "name"          => "Quito",
                "diff_from_gtm" => "America/Bogota",
            ],
            [
                "offset"        => "UTC-04:00",
                "name"          => "Atlantic Time (Canada)",
                "diff_from_gtm" => "Canada/Atlantic",
            ],
            [
                "offset"        => "UTC-04:30",
                "name"          => "Caracas",
                "diff_from_gtm" => "America/Caracas",
            ],
            [
                "offset"        => "UTC-04:00",
                "name"          => "La Paz",
                "diff_from_gtm" => "America/La_Paz",
            ],
            [
                "offset"        => "UTC-04:00",
                "name"          => "Santiago",
                "diff_from_gtm" => "America/Santiago",
            ],
            [
                "offset"        => "UTC-03:30",
                "name"          => "Newfoundland",
                "diff_from_gtm" => "Canada/Newfoundland",
            ],
            [
                "offset"        => "UTC-03:00",
                "name"          => "Brasilia",
                "diff_from_gtm" => "America/Sao_Paulo",
            ],
            [
                "offset"        => "UTC-03:00",
                "name"          => "Buenos Aires",
                "diff_from_gtm" => "America/Argentina/Buenos_Aires",
            ],
            [
                "offset"        => "UTC-03:00",
                "name"          => "Georgetown",
                "diff_from_gtm" => "America/Argentina/Buenos_Aires",
            ],
            [
                "offset"        => "UTC-03:00",
                "name"          => "Greenland",
                "diff_from_gtm" => "America/Godthab",
            ],
            [
                "offset"        => "UTC-02:00",
                "name"          => "Mid-Atlantic",
                "diff_from_gtm" => "America/Noronha",
            ],
            [
                "offset"        => "UTC-01:00",
                "name"          => "Azores",
                "diff_from_gtm" => "Atlantic/Azores",
            ],
            [
                "offset"        => "UTC-01:00",
                "name"          => "Cape Verde Is.",
                "diff_from_gtm" => "Atlantic/Cape_Verde",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "Casablanca",
                "diff_from_gtm" => "Africa/Casablanca",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "Edinburgh",
                "diff_from_gtm" => "Europe/London",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "Greenwich Mean Time : Dublin",
                "diff_from_gtm" => "Etc/Greenwich",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "Lisbon",
                "diff_from_gtm" => "Europe/Lisbon",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "London",
                "diff_from_gtm" => "Europe/London",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "Monrovia",
                "diff_from_gtm" => "Africa/Monrovia",
            ],
            [
                "offset"        => "UTC+00:00",
                "name"          => "UTC",
                "diff_from_gtm" => "UTC",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Amsterdam",
                "diff_from_gtm" => "Europe/Amsterdam",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Belgrade",
                "diff_from_gtm" => "Europe/Belgrade",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Berlin",
                "diff_from_gtm" => "Europe/Berlin",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Bern",
                "diff_from_gtm" => "Europe/Berlin",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Bratislava",
                "diff_from_gtm" => "Europe/Bratislava",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Brussels",
                "diff_from_gtm" => "Europe/Brussels",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Budapest",
                "diff_from_gtm" => "Europe/Budapest",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Copenhagen",
                "diff_from_gtm" => "Europe/Copenhagen",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Ljubljana",
                "diff_from_gtm" => "Europe/Ljubljana",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Madrid",
                "diff_from_gtm" => "Europe/Madrid",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Paris",
                "diff_from_gtm" => "Europe/Paris",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Prague",
                "diff_from_gtm" => "Europe/Prague",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Rome",
                "diff_from_gtm" => "Europe/Rome",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Sarajevo",
                "diff_from_gtm" => "Europe/Sarajevo",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Skopje",
                "diff_from_gtm" => "Europe/Skopje",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Stockholm",
                "diff_from_gtm" => "Europe/Stockholm",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Vienna",
                "diff_from_gtm" => "Europe/Vienna",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Warsaw",
                "diff_from_gtm" => "Europe/Warsaw",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "West Central Africa",
                "diff_from_gtm" => "Africa/Lagos",
            ],
            [
                "offset"        => "UTC+01:00",
                "name"          => "Zagreb",
                "diff_from_gtm" => "Europe/Zagreb",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Athens",
                "diff_from_gtm" => "Europe/Athens",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Bucharest",
                "diff_from_gtm" => "Europe/Bucharest",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Cairo",
                "diff_from_gtm" => "Africa/Cairo",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Harare",
                "diff_from_gtm" => "Africa/Harare",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Helsinki",
                "diff_from_gtm" => "Europe/Helsinki",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Istanbul",
                "diff_from_gtm" => "Europe/Istanbul",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Jerusalem",
                "diff_from_gtm" => "Asia/Jerusalem",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Kyiv",
                "diff_from_gtm" => "Europe/Helsinki",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Pretoria",
                "diff_from_gtm" => "Africa/Johannesburg",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Riga",
                "diff_from_gtm" => "Europe/Riga",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Sofia",
                "diff_from_gtm" => "Europe/Sofia",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Tallinn",
                "diff_from_gtm" => "Europe/Tallinn",
            ],
            [
                "offset"        => "UTC+02:00",
                "name"          => "Vilnius",
                "diff_from_gtm" => "Europe/Vilnius",
            ],
            [
                "offset"        => "UTC+03:00",
                "name"          => "Baghdad",
                "diff_from_gtm" => "Asia/Baghdad",
            ],
            [
                "offset"        => "UTC+03:00",
                "name"          => "Kuwait",
                "diff_from_gtm" => "Asia/Kuwait",
            ],
            [
                "offset"        => "UTC+03:00",
                "name"          => "Minsk",
                "diff_from_gtm" => "Europe/Minsk",
            ],
            [
                "offset"        => "UTC+03:00",
                "name"          => "Nairobi",
                "diff_from_gtm" => "Africa/Nairobi",
            ],
            [
                "offset"        => "UTC+03:00",
                "name"          => "Riyadh",
                "diff_from_gtm" => "Asia/Riyadh",
            ],
            [
                "offset"        => "UTC+03:00",
                "name"          => "Volgograd",
                "diff_from_gtm" => "Europe/Volgograd",
            ],
            [
                "offset"        => "UTC+03:30",
                "name"          => "Tehran",
                "diff_from_gtm" => "Asia/Tehran",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "Abu Dhabi",
                "diff_from_gtm" => "Asia/Muscat",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "Baku",
                "diff_from_gtm" => "Asia/Baku",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "Moscow",
                "diff_from_gtm" => "Europe/Moscow",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "Muscat",
                "diff_from_gtm" => "Asia/Muscat",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "St. Petersburg",
                "diff_from_gtm" => "Europe/Moscow",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "Tbilisi",
                "diff_from_gtm" => "Asia/Tbilisi",
            ],
            [
                "offset"        => "UTC+04:00",
                "name"          => "Yerevan",
                "diff_from_gtm" => "Asia/Yerevan",
            ],
            [
                "offset"        => "UTC+04:30",
                "name"          => "Kabul",
                "diff_from_gtm" => "Asia/Kabul",
            ],
            [
                "offset"        => "UTC+05:00",
                "name"          => "Islamabad",
                "diff_from_gtm" => "Asia/Karachi",
            ],
            [
                "offset"        => "UTC+05:00",
                "name"          => "Karachi",
                "diff_from_gtm" => "Asia/Karachi",
            ],
            [
                "offset"        => "UTC+05:00",
                "name"          => "Tashkent",
                "diff_from_gtm" => "Asia/Tashkent",
            ],
            [
                "offset"        => "UTC+05:30",
                "name"          => "Chennai",
                "diff_from_gtm" => "Asia/Calcutta",
            ],
            [
                "offset"        => "UTC+05:30",
                "name"          => "Kolkata",
                "diff_from_gtm" => "Asia/Kolkata",
            ],
            [
                "offset"        => "UTC+05:30",
                "name"          => "Mumbai",
                "diff_from_gtm" => "Asia/Calcutta",
            ],
            [
                "offset"        => "UTC+05:30",
                "name"          => "New Delhi",
                "diff_from_gtm" => "Asia/Calcutta",
            ],
            [
                "offset"        => "UTC+05:30",
                "name"          => "Sri Jayawardenepura",
                "diff_from_gtm" => "Asia/Calcutta",
            ],
            [
                "offset"        => "UTC+05:45",
                "name"          => "Kathmandu",
                "diff_from_gtm" => "Asia/Katmandu",
            ],
            [
                "offset"        => "UTC+06:00",
                "name"          => "Almaty",
                "diff_from_gtm" => "Asia/Almaty",
            ],
            [
                "offset"        => "UTC+06:00",
                "name"          => "Astana",
                "diff_from_gtm" => "Asia/Dhaka",
            ],
            [
                "offset"        => "UTC+06:00",
                "name"          => "Dhaka",
                "diff_from_gtm" => "Asia/Dhaka",
            ],
            [
                "offset"        => "UTC+06:00",
                "name"          => "Ekaterinburg",
                "diff_from_gtm" => "Asia/Yekaterinburg",
            ],
            [
                "offset"        => "UTC+06:30",
                "name"          => "Rangoon",
                "diff_from_gtm" => "Asia/Rangoon",
            ],
            [
                "offset"        => "UTC+07:00",
                "name"          => "Bangkok",
                "diff_from_gtm" => "Asia/Bangkok",
            ],
            [
                "offset"        => "UTC+07:00",
                "name"          => "Hanoi",
                "diff_from_gtm" => "Asia/Bangkok",
            ],
            [
                "offset"        => "UTC+07:00",
                "name"          => "Jakarta",
                "diff_from_gtm" => "Asia/Jakarta",
            ],
            [
                "offset"        => "UTC+07:00",
                "name"          => "Novosibirsk",
                "diff_from_gtm" => "Asia/Novosibirsk",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Beijing",
                "diff_from_gtm" => "Asia/Hong_Kong",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Chongqing",
                "diff_from_gtm" => "Asia/Chongqing",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Hong Kong",
                "diff_from_gtm" => "Asia/Hong_Kong",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Krasnoyarsk",
                "diff_from_gtm" => "Asia/Krasnoyarsk",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Kuala Lumpur",
                "diff_from_gtm" => "Asia/Kuala_Lumpur",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Perth",
                "diff_from_gtm" => "Australia/Perth",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Singapore",
                "diff_from_gtm" => "Asia/Singapore",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Taipei",
                "diff_from_gtm" => "Asia/Taipei",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Ulaan Bataar",
                "diff_from_gtm" => "Asia/Ulan_Bator",
            ],
            [
                "offset"        => "UTC+08:00",
                "name"          => "Urumqi",
                "diff_from_gtm" => "Asia/Urumqi",
            ],
            [
                "offset"        => "UTC+09:00",
                "name"          => "Irkutsk",
                "diff_from_gtm" => "Asia/Irkutsk",
            ],
            [
                "offset"        => "UTC+09:00",
                "name"          => "Osaka",
                "diff_from_gtm" => "Asia/Tokyo",
            ],
            [
                "offset"        => "UTC+09:00",
                "name"          => "Sapporo",
                "diff_from_gtm" => "Asia/Tokyo",
            ],
            [
                "offset"        => "UTC+09:00",
                "name"          => "Seoul",
                "diff_from_gtm" => "Asia/Seoul",
            ],
            [
                "offset"        => "UTC+09:00",
                "name"          => "Tokyo",
                "diff_from_gtm" => "Asia/Tokyo",
            ],
            [
                "offset"        => "UTC+09:30",
                "name"          => "Adelaide",
                "diff_from_gtm" => "Australia/Adelaide",
            ],
            [
                "offset"        => "UTC+09:30",
                "name"          => "Darwin",
                "diff_from_gtm" => "Australia/Darwin",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Brisbane",
                "diff_from_gtm" => "Australia/Brisbane",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Canberra",
                "diff_from_gtm" => "Australia/Canberra",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Guam",
                "diff_from_gtm" => "Pacific/Guam",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Hobart",
                "diff_from_gtm" => "Australia/Hobart",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Melbourne",
                "diff_from_gtm" => "Australia/Melbourne",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Port Moresby",
                "diff_from_gtm" => "Pacific/Port_Moresby",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Sydney",
                "diff_from_gtm" => "Australia/Sydney",
            ],
            [
                "offset"        => "UTC+10:00",
                "name"          => "Yakutsk",
                "diff_from_gtm" => "Asia/Yakutsk",
            ],
            [
                "offset"        => "UTC+11:00",
                "name"          => "Vladivostok",
                "diff_from_gtm" => "Asia/Vladivostok",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Auckland",
                "diff_from_gtm" => "Pacific/Auckland",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Fiji",
                "diff_from_gtm" => "Pacific/Fiji",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "International Date Line West",
                "diff_from_gtm" => "Pacific/Kwajalein",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Kamchatka",
                "diff_from_gtm" => "Asia/Kamchatka",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Magadan",
                "diff_from_gtm" => "Asia/Magadan",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Marshall Is.",
                "diff_from_gtm" => "Pacific/Fiji",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "New Caledonia",
                "diff_from_gtm" => "Asia/Magadan",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Solomon Is.",
                "diff_from_gtm" => "Asia/Magadan",
            ],
            [
                "offset"        => "UTC+12:00",
                "name"          => "Wellington",
                "diff_from_gtm" => "Pacific/Auckland",
            ],
            [
                "offset"        => "UTC+13:00",
                "name"          => "Nuku\'alofa",
                "diff_from_gtm" => "Pacific/Tongatap"
            ]
        ];

        foreach( $timezone AS $array )
            Timezone::create( $array );
    }
}
