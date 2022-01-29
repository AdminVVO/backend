<?php

namespace Database\Seeders;

use App\Models\TypeProduct;
use Illuminate\Database\Seeder;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type=[
            [
                "cod"=>"f365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Apartment"
            ],
            [
                "cod"=>"g365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"House"
            ],
            [
                "cod"=>"r365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"SecondaryUnit"
            ]
        ];
        foreach($type as $t){
            TypeProduct::create($t);
        }
    }
}
