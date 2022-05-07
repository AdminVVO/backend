<?php

namespace Database\Seeders;

use App\Models\QuestionFrequent;
use Illuminate\Database\Seeder;

class QuestionFrequentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'code' => 'need_inform',
                'name'   => 'I need information?',
            ],
            [
                'code' => 'price_pack',
                'name'   => 'How much is pack 1 worth?',
            ],
        ];

        foreach( $questions AS $array )
            QuestionFrequent::create( $array );
    }
}