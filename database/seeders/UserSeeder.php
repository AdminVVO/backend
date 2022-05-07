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
                'name'             => 'Lenier Leonardo',
                'last_name'        => 'Rivas Granados',
                'full_name'        => 'Lenier Leonardo Rivas Granados',
                'date_birth'       => '2021-01-25',
                'email'            => 'lenier@gmail.com',
                'password'         => 'lenier@gmail.com@2021-01-25',
                'avatar'           => '1.png',
                'sex'              => 'Male',
                'language_default' => 'US',
                'currency_default' => 'USD',
                'phone'            => '+5841257322',
                'rol_id'             => '1'
            ],
            [
                'name'             => 'Daniela Dani',
                'last_name'        => 'Gonzales',
                'full_name'        => 'Daniela Dani Gonzales',
                'date_birth'       => '2021-01-25',
                'email'            => 'daniela@gmail.com',
                'password'         => 'daniela@gmail.com@2021-01-25',
                'avatar'           => '3.png',
                'sex'              => 'Female',
                'language_default' => 'US',
                'currency_default' => 'USD',
                'phone'            => '+5841457322',
                'rol_id'             => '2'
            ],
            [
                'name'             => 'Developer Dev',
                'last_name'        => 'Program Pro',
                'full_name'        => 'Developer Dev Program Pro',
                'date_birth'       => '2021-01-25',
                'email'            => 'Dev@gmail.com',
                'password'         => 'Dev@gmail.com@2021-01-25',
                'avatar'           => '2.png',
                'sex'              => 'Female',
                'language_default' => 'US',
                'currency_default' => 'USD',
                'phone'            => '+5841257323',
                'rol_id'             => '2'
            ]
        ];

        foreach( $users AS $array )
            User::create( $array );
    }
}



