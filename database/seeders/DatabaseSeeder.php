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
        ## Main Seeders
        $this->call([TimezoneSeeder::class]);
        $this->call([CurrencsSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([LanguagesRegionsSeeder::class]);
        $this->call([RoomsPropertySeeder::class]);
        $this->call([AmenitiesSafetySeeder::class]);
        $this->call([ScenicViewsSeeder::class]);
        $this->call([RolesSeeder::class]);
        $this->call([QuestionFrequentSeeder::class]);

        ## Secondary Seeders
        $this->call([UserSeeder::class]);
        $this->call([CardCategorySeeder::class]);
        
        // $this->call([Chats::class]);
        // $this->call([MessageChats::class]);
    }
}
