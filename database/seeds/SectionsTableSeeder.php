<?php

use Illuminate\Database\Seeder;
use TuNegocio\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'code' => 'theme1.inicio',
            'name' => 'Inicio',
            'href' => '#intro',
            'allow_image' => '1',
            'theme_id' => '1',
        ]);
        
        Section::create([
            'code' => 'theme1.sobremi',
            'name' => 'Sobre mi',
            'href' => '#about',
            'allow_image' => '0',
            'theme_id' => '1',
        ]);
        
        Section::create([
            'code' => 'theme1.experiencias',
            'name' => 'Experiencias',
            'href' => '#resume',
            'allow_image' => '0',
            'theme_id' => '1',
        ]);
        
        Section::create([
            'code' => 'theme1.hobbies',
            'name' => 'Hobbies',
            'href' => '#portfolio',
            'allow_image' => '0',
            'theme_id' => '1',
        ]);

        Section::create([
            'code' => 'theme1.servicios',
            'name' => 'Servicios',
            'href' => '#services',
            'allow_image' => '1',
            'theme_id' => '1',
        ]);

        Section::create([
            'code' => 'theme1.contacto',
            'name' => 'Contacto',
            'href' => '#contact',
            'allow_image' => '0',
            'theme_id' => '1',
        ]);
    }
}
