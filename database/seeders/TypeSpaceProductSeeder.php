<?php

namespace Database\Seeders;

use App\Models\TypeSpaceProduct;
use Illuminate\Database\Seeder;

class TypeSpaceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $typespace=[
            [
                "cod"=>"f365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Any place"
            ],
            [
                "cod"=>"g365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Private room"
            ],
            [
                "cod"=>"r365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Shared room"
            ]
        ];
        foreach($typespace as $t){
            TypeSpaceProduct::create($t);
        }
    }
}
