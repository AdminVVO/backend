<?php

namespace Database\Seeders;
use App\Models\StatusReservation;
use Illuminate\Database\Seeder;

class StatusReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusReservation = [
            [
                'name' => 'Confirmed',
                'comment' => 'C',
                'color' => '_txtverd',
                'status' => 0
            ],
            [
                'name' => 'Arriving tomorrow',
                'comment' => 'AT',
                'color' => '_txtverd',
                'status' => 1
            ],
            [
                'name' => 'Trip request',
                'comment' => 'TR',
                'color' => '_txtred',
                'status' => 2
            ],
            [
                'name' => 'Currrently hosting',
                'comment' => 'CH',
                'color' => '_txtverd',
                'status' => 3
            ],
            [
                'name' => 'Review guest',
                'comment' => 'RG',
                'color' => '_txtec',
                'status' => 4
            ],
            [
                'name' => 'Past guest',
                'comment' => 'PG',
                'color' => '_txtec',
                'status' => 5
            ],
            [
                'name' => 'By guest',
                'comment' => 'BG',
                'color' => '_txtred',
                'status' => 6
            ],
        ];

        foreach( $statusReservation AS $array )
            StatusReservation::create( $array );
    }
}
