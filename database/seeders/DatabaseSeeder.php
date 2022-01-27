<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([AccommodationSeeder::class]);
        $this->call([LanguagesRegionsSeeder::class]);
        $this->call([CurrencsSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([SiteSeeder::class]);
        $this->call([CardCategorySeeder::class]);
    }
}
