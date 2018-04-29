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
        SectionUser::create([
            'user_id' => '1',
            'section_id' => '1',
            'background_color' => '#FFFFFF',
            'background_img' => 'bg.jpg',
        ]);

        SectionUser::create([
            'user_id' => '1',
            'section_id' => '2',
            'background_color' => '#FFFFFF',
            'background_img' => 'bg.jpg',
        ]);

        SectionUser::create([
            'user_id' => '1',
            'section_id' => '3',
            'background_color' => '#FFFFFF',
            'background_img' => 'bg.jpg',
        ]);

        SectionUser::create([
            'user_id' => '1',
            'section_id' => '4',
            'background_color' => '#FFFFFF',
            'background_img' => 'bg.jpg',
        ]);

        SectionUser::create([
            'user_id' => '1',
            'section_id' => '5',
            'background_color' => '#FFFFFF',
            'background_img' => 'bg.jpg',
        ]);

        SectionUser::create([
            'user_id' => '1',
            'section_id' => '6',
            'background_color' => '#FFFFFF',
            'background_img' => 'bg.jpg',
        ]);
    }
}
