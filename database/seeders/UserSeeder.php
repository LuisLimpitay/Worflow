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
            'name' => 'Luis',
            'last_name' => 'Limpitay',
            'number_license' => '33258741',
            'expire_license' => '2023-07-25',


            'email' => 'admin@gmail.com',
            'password' => bcrypt('55555555'),
            'level' => '1'
        ]);
        User::factory(6)->create();
    }
}
