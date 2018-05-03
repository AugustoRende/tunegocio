<?php

use Illuminate\Database\Seeder;
use TuNegocio\SectionUser;

class SectionUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section_user')->insert(['section_id' => 1,'user_id' => 1,'primary_color' => '#2ECC71']);
        DB::table('section_user')->insert(['section_id' => 2,'user_id' => 1,'primary_color' => '#2ECC71']);
        DB::table('section_user')->insert(['section_id' => 3,'user_id' => 1,'primary_color' => '#2ECC71']);
        DB::table('section_user')->insert(['section_id' => 4,'user_id' => 1,'primary_color' => '#2ECC71']);
        DB::table('section_user')->insert(['section_id' => 5,'user_id' => 1,'primary_color' => '#2ECC71']);
        DB::table('section_user')->insert(['section_id' => 6,'user_id' => 1,'primary_color' => '#2ECC71']);

        DB::table('section_user')->insert(['section_id' => 1,'user_id' => 2,'primary_color' => '#A5178D', 'background_img' => '/images/luciaoviedo/fondo.jpg']);
        DB::table('section_user')->insert(['section_id' => 2,'user_id' => 2,'primary_color' => '#A5178D']);
        DB::table('section_user')->insert(['section_id' => 3,'user_id' => 2,'primary_color' => '#A5178D']);
        DB::table('section_user')->insert(['section_id' => 4,'user_id' => 2,'primary_color' => '#A5178D']);
        DB::table('section_user')->insert(['section_id' => 5,'user_id' => 2,'primary_color' => '#A5178D', 'background_img' => '/images/luciaoviedo/fondo.jpg']);
        DB::table('section_user')->insert(['section_id' => 6,'user_id' => 2,'primary_color' => '#A5178D']);
    }
}
