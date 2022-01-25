<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories=[
            [
                "type"=>"Cabins"
            ],
            [
                "type"=>"Beachfront"
            ],
            [
                "type"=>"Luxe"
            ]
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
}
