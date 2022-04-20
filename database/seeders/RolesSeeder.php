<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'status' => 1,
                'rol'    => 1,
                'name'   => 'Host',
            ],
            [
                'status' => 1,
                'rol'    => 2,
                'name'   => 'Cliente',
            ],
            [
                'status' => 1,
                'rol'    => 3,
                'name'   => 'Administrador',
            ]
        ];

        foreach( $roles AS $array )
            Roles::create( $array );
    }
}