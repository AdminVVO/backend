<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;
class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sites[] = [
            "title"=>"Nuevo",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl" => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];
        $sites[] = [
            "title"=>"Nuevo2",
                "price"=>"45",
                "date"=>"23 dic-31 dic",
                "distance"=>"400",
                "thumbNailUrl"      => "imagenurk"
        ];

        foreach($sites as $site){
            Site::create($site);
        }
    }
}
