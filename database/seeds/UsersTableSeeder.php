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
            'remember_token' => str_random(10),
        ]);
    }
}
