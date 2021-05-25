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
            'name' => 'Valeriana',
            'last_name' => 'Alba',
            'number_license' => '33118222',
            'expire_license' => '2023-08-25',


            'email' => 'user2@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '2'
        ]);
        User::factory(23)->create();
    }
}
