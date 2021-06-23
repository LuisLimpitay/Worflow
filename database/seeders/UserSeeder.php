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
                'expire_license' => '2023-07-25',
                'phone' => '3885789456',


                'email' => 'admin@gmail.com',
                'password' => bcrypt('55555555'),
                'level' => '1'
            ]);

        

        User::create([
            'name' => 'Ruben',
            'last_name' => 'Zamora',
            'expire_license' => '2023-08-25',
            'phone' => '2995789999',

            'email' => 'user@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);

        User::create([
            'name' => 'Alba',
            'last_name' => 'Valeriana',
            'expire_license' => '2023-08-26',
            'phone' => '2975789752',

            'email' => 'user2@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);

        User::create([
            'name' => 'Agustina',
            'last_name' => 'Gaite',
            'expire_license' => '2023-08-23',
            'phone' => '3815123456',

            'email' => 'user3@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);


        User::factory(16)->create();

        
        
    }
}
