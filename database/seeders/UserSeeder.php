<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'             => 'Developer Dev',
                'last_name'        => 'Program Pro',
                'date_birth'       => '2021-01-25',
                'email'            => 'Dev@gmail.com',
                'password'         => 'Dev@gmail.com@2021-01-25',
                'avatar'           => 'user.png',
                'sex'              => 'Male',
                'language_default' => 'US',
                'currency_default' => 'USD',
                'phone'            => '+5841257323',
            ]
        ];

        foreach( $users AS $array )
            User::create( $array );
    }
}



