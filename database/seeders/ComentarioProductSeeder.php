<?php

namespace Database\Seeders;

use App\Models\ComentarioProduct;
use Illuminate\Database\Seeder;

class ComentarioProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ComentarioProduct::factory(12)->create();
    }
}
