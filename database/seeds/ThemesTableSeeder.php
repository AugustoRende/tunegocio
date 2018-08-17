<?php

use Illuminate\Database\Seeder;
Use TuNegocio\Theme;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            'code' => 'theme1',
            'name' => 'Presentación Personal',
            'demo_url' => 'augustorende',
            'img' => 'theme1.jpg',
        ]);

        Theme::create([
            'code' => 'theme2',
            'name' => 'InfinIT',
            'demo_url' => 'infinit',
            'img' => 'theme2.jpg',
        ]);
    }
}
