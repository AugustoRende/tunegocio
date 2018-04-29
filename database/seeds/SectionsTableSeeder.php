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
            'theme_id' => '1',
        ]);
        
        Section::create([
            'code' => 'theme1.sobremi',
            'name' => 'Sobre Mi',
            'theme_id' => '1',
        ]);
        
        Section::create([
            'code' => 'theme1.experiencias',
            'name' => 'Experiencias',
            'theme_id' => '1',
        ]);
        
        Section::create([
            'code' => 'theme1.hobbies',
            'name' => 'Hobbies',
            'theme_id' => '1',
        ]);

        Section::create([
            'code' => 'theme1.servicios',
            'name' => 'Servicios',
            'theme_id' => '1',
        ]);

        Section::create([
            'code' => 'theme1.contacto',
            'name' => 'Contacto',
            'theme_id' => '1',
        ]);
    }
}
