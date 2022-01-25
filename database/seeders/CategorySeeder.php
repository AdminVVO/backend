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
                "type"=>"Nuevo"
            ],
            [
                "type"=>"Nuevo2"
            ],
            [
                "type"=>"Nuevo3"
            ]
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
}
