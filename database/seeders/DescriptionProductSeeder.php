<?php

namespace Database\Seeders;

use App\Models\DescriptionProduct;
use Illuminate\Database\Seeder;

class DescriptionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $description=[
            [
                "cod"=>"f365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Service Apartment"
            ],
            [
                "cod"=>"g365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"vacation home"
            ],
            [
                "cod"=>"r365f92e-811e-11ec-a8a3-0242ac120002",
                "name"=>"Other"
            ]
        ];
        foreach($description as $d){
            DescriptionProduct::create($d);
        }
    }
}
