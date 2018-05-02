<?php

use Illuminate\Database\Seeder;
use TuNegocio\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Augusto Rende',
            'email' => 'augustorendegiacomelli@gmail.com',
            'password' => bcrypt('augusto'),
            'url' => 'augustorende',
            'tittle' => 'Augusto Rende Giacomelli',
            'theme_id' => '1',
            'primary_color' => '#2ECC71',
            'secondary_color' => '#FFFFFF',
            'remember_token' => str_random(10),
        ]);

        User::create([
            'name' => 'Lucia Oviedo',
            'email' => 'lucioviedo@gmail.com',
            'password' => bcrypt('augusto'),
            'url' => 'luciaoviedo',
            'tittle' => 'Lucía Oviedo',
            'theme_id' => '1',
            'primary_color' => '#A5178D',
            'secondary_color' => '#FFFFFF',
            'remember_token' => str_random(10),
        ]);
    }
}
