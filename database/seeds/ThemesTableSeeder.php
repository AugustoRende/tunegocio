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
        ]);

        Theme::create([
            'code' => 'theme2',
            'name' => 'InfinIT',
        ]);
    }
}
