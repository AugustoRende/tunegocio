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
        DB::table('component_sections')->insert(['name' => 'Red Social1', 'component_id' => 1, 'section_id' => 1]);
        
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
        DB::table('component_sections')->insert(['name' => 'Subtítulo', 'component_id' => 1, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Estudios', 'component_id' => 4, 'section_id' => 3]);
        DB::table('component_sections')->insert(['name' => 'Subtítulo', 'component_id' => 1, 'section_id' => 3]);
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


        // /*NO SE QUE SERÍA ESTA AHORA*/
        // DB::table('component_sections')->insert(['section_id' => 1,'component_id' => 1]);
        // DB::table('component_sections')->insert(['section_id' => 1,'component_id' => 2]);
        // DB::table('component_sections')->insert(['section_id' => 1,'component_id' => 3]);
        // DB::table('component_sections')->insert(['section_id' => 1,'component_id' => 4]);
        // DB::table('component_sections')->insert(['section_id' => 1,'component_id' => 5]);
        // // PROBANDO PONER 2 REDES SOCIALES!!
        // DB::table('component_sections')->insert(['section_id' => 1,'component_id' => 5]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 6]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 7]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 8]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 9]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 10]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 11]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 12]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 13]);
        // DB::table('component_sections')->insert(['section_id' => 2,'component_id' => 14]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 15]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 16]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 17]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 18]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 19]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 20]);
        // DB::table('component_sections')->insert(['section_id' => 3,'component_id' => 21]);
        // DB::table('component_sections')->insert(['section_id' => 4,'component_id' => 22]);
        // DB::table('component_sections')->insert(['section_id' => 4,'component_id' => 23]);
        // DB::table('component_sections')->insert(['section_id' => 4,'component_id' => 24]);
        // DB::table('component_sections')->insert(['section_id' => 5,'component_id' => 25]);
        // DB::table('component_sections')->insert(['section_id' => 5,'component_id' => 26]);
        // DB::table('component_sections')->insert(['section_id' => 5,'component_id' => 27]);
        // DB::table('component_sections')->insert(['section_id' => 6,'component_id' => 28]);
        // DB::table('component_sections')->insert(['section_id' => 6,'component_id' => 29]);
        // DB::table('component_sections')->insert(['section_id' => 6,'component_id' => 30]);
        // DB::table('component_sections')->insert(['section_id' => 6,'component_id' => 31]);
    }
}
