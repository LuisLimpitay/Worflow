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
        User::create([
            'name' => 'Axel',
            'last_name' => 'Calisaya',
            'number_license' => '33258741',
            'expire_license' => '2023-07-25',


            'email' => 'admin@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '1'
        ]);

        User::create([
            'name' => 'Ruben',
            'last_name' => 'Zamora',
            'number_license' => '33111222',
            'expire_license' => '2023-08-25',


            'email' => 'user@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);

        User::create([
            'name' => 'Alba',
            'last_name' => 'Valeriana',
            'number_license' => '33118247',
            'expire_license' => '2023-08-26',


            'email' => 'user2@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);

        User::create([
            'name' => 'Agustina',
            'last_name' => 'Gaite',
            'number_license' => '33118262',
            'expire_license' => '2023-08-23',


            'email' => 'user3@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);

        User::create([
            'name' => 'Lucrecia',
            'last_name' => 'Cruz',
            'number_license' => '33113222',
            'expire_license' => '2023-08-22',


            'email' => 'user4@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);

        User::create([
            'name' => 'Patricia',
            'last_name' => 'Sandoval',
            'number_license' => '32118222',
            'expire_license' => '2023-08-21',


            'email' => 'user5@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);
        
    }
}
