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
        $this->call([UserSeeder::class]);
        $this->call([AccommodationSeeder::class]);
        $this->call([LanguagesRegionsSeeder::class]);
        $this->call([CurrencsSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([SiteSeeder::class]);
        $this->call([CardCategorySeeder::class]);
        $this->call([CategoryProductSeeder::class]);
        $this->call([TypeProductSeeder::class]);
        $this->call([TypeSpaceProductSeeder::class]);
        $this->call([DescriptionProductSeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([ReservationProductSeeder::class]);
        $this->call([ComentarioProductSeeder::class]);
    }
}
