<?php

namespace Database\Seeders;

use App\Models\MessageChats as ModelMessageChats;
use Illuminate\Database\Seeder;

class MessageChats extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                'message'  => 'Hola Dev Soport',
                'type'     => 'message',
                'user_id'  => 2,
                'chats_id' => '0e5161d1-ed55-401b-aa38-aa5f5ef118e9',
            ],
            [
                'message'  => 'Hola Lenier Rivas',
                'type'     => 'message',
                'user_id'  => 1,
                'chats_id' => '0e5161d1-ed55-401b-aa38-aa5f5ef118e9',
            ],
        ];

        foreach( $messages AS $array )
            ModelMessageChats::create( $array );
    }
}