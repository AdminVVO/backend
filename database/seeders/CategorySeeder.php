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
                "type"=>"Offbeat"
            ],
            [
                "type"=>"Luxe"
            ],
            [
                "type"=>"Skin-in/Skin-out"
            ]
            ,
            [
                "type"=>"Cabins"
            ]
            ,
            [
                "type"=>"Beachfront"
            ]
            ,
            [
                "type"=>"A-frames"
            ]
            ,
            [
                "type"=>"Tinyhomes"
            ]
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
}
