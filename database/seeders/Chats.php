<?php

namespace Database\Seeders;

use App\Models\Chats as ModelChats;
use Illuminate\Database\Seeder;

class Chats extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chats = [
            [
                'id_chats' => '0e5161d1-ed55-401b-aa38-aa5f5ef118e9',
                'transmitter_id' => 1,
                'receiver_id'    => 2,
            ],
        ];

        foreach( $chats AS $array )
            ModelChats::create( $array );
    }
}
