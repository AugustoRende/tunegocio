<?php

use Illuminate\Database\Seeder;

class ComponentSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_sections')->insert(['name' => 'Intro', 'component_id' => 1, 'section_id' => 1]);
        DB::table('component_sections')->insert(['name' => 'Título', 'component_id' => 1, 'section_id' => 1]);
        DB::table('component_sections')->insert(['name' => 'Subtítulo', 'component_id' => 1, 'section_id' => 1]);
        DB::table('component_sections')->insert(['name' => 'Botón', 'component_id' => 1, 'section_id' => 1]);
        DB::table('component_sections')->insert(['name' => 'Red Social', 'component_id' => 1, 'section_id' => 1]);
        
        DB::table('component_sections')->insert(['name' => 'Intro', 'component_id' => 1, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Título', 'component_id' => 1, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Imagen', 'component_id' => 1, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Descripción', 'component_id' => 1, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Intro Perfil', 'component_id' => 8, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Perfil', 'component_id' => 3, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Intro Skills', 'component_id' => 8, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Skills', 'component_id' => 2, 'section_id' => 2]);
        DB::table('component_sections')->insert(['name' => 'Botón', 'component_id' => 1, 'section_id' => 2]);
        
        DB::table('component_sections')->insert(['name' => 'Intro', 'component_id' => 1, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Título', 'component_id' => 1, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Descripción', 'component_id' => 1, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Subtítulo1', 'component_id' => 1, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Estudios', 'component_id' => 4, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Subtítulo2', 'component_id' => 1, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Trabajos', 'component_id' => 4, 'section_id' => 3]);

        DB::table('component_sections')->insert(['name' => 'Intro', 'component_id' => 1, 'section_id' => 4]);
        DB::table('component_sections')->insert(['name' => 'Título', 'component_id' => 1, 'section_id' => 4]);
        DB::table('component_sections')->insert(['name' => 'Galería', 'component_id' => 5, 'section_id' => 4]);

        DB::table('component_sections')->insert(['name' => 'Intro', 'component_id' => 1, 'section_id' => 5]);
        DB::table('component_sections')->insert(['name' => 'Título', 'component_id' => 1, 'section_id' => 5]);
        DB::table('component_sections')->insert(['name' => 'Carrousel', 'component_id' => 6, 'section_id' => 5]);

        DB::table('component_sections')->insert(['name' => 'Intro', 'component_id' => 1, 'section_id' => 6]);
        DB::table('component_sections')->insert(['name' => 'Título', 'component_id' => 1, 'section_id' => 6]);
        DB::table('component_sections')->insert(['name' => 'Formulario', 'component_id' => 7, 'section_id' => 6]);
        DB::table('component_sections')->insert(['name' => 'Info', 'component_id' => 6, 'section_id' => 6]);
    }
}
