<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
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
                "cod"=>"f365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Offbeat"
            ],
            [
                "cod"=>"g365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Luxe"
            ],
            [
                "cod"=>"r365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Skin-in/Skin-out"
            ]
            ,
            [
                "cod"=>"y365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Cabins"
            ]
            ,
            [
                "cod"=>"b365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Beachfront"
            ]
            ,
            [
                "cod"=>"l365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"A-frames"
            ]
            ,
            [
                "cod"=>"io65f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Tinyhomes"
            ]
        ];
        foreach($categories as $category){
            CategoryProduct::create($category);
        }
    }
}
