<?php

namespace Database\Seeders;

use App\Models\ReservationProduct;
use Illuminate\Database\Seeder;

class ReservationProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReservationProduct::factory(12)->create();
    }
}
