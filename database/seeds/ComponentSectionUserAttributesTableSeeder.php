<?php

use Illuminate\Database\Seeder;

class ComponentSectionUserAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 32,'comp_type_attribute_id' => 1, 'value' => 'HOLIIII!']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 33,'comp_type_attribute_id' => 1, 'value' => 'Soy Lucía Oviedo.']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 34,'comp_type_attribute_id' => 1, 'value' => 'PERSONAL TRAINEER']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 35,'comp_type_attribute_id' => 1, 'value' => 'VER MÁS']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 36,'comp_type_attribute_id' => 1, 'value' => 'https://www.facebook.com/luciaoviedolopez']);

        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 37,'comp_type_attribute_id' => 1, 'value' => 'SOBRE MI']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 38,'comp_type_attribute_id' => 1, 'value' => 'Una pequeña introducción.']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 39,'comp_type_attribute_id' => 10, 'value' => 'images/profile-pic.jpg']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 40,'comp_type_attribute_id' => 1, 'value' => 'Descripción corta']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 41,'comp_type_attribute_id' => 21, 'value' => 'DATOS PERSONALES']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 41,'comp_type_attribute_id' => 22, 'value' => 'Descripción de los datos personales']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 4, 'value' => 'NOMBRE:']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 5, 'value' => 'Lucía Oviedo']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 4, 'value' => 'FECHA DE NACIMIENTO:']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 5, 'value' => '3 de Octubre de 1993.']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 4, 'value' => 'TRABAJO:']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 5, 'value' => 'Profesora de Educación Física, Clases de Pilates, Personalizados']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 4, 'value' => 'EMAIL:']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 42,'comp_type_attribute_id' => 5, 'value' => 'lucioviedo03@gmail.com']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 43,'comp_type_attribute_id' => 21, 'value' => 'HABILIDADES']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 43,'comp_type_attribute_id' => 22, 'value' => 'Descripción de las habilidades']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 2, 'value' => 'EDUCACIÓN']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 3, 'value' => '90']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 2, 'value' => 'PILATES']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 3, 'value' => '85']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 2, 'value' => 'FUNCIONAL']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 3, 'value' => '70']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 2, 'value' => 'PERSONALIZADOS']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 3, 'value' => '95']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 2, 'value' => 'YOGA']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 3, 'value' => '90']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 2, 'value' => 'PATIN']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 44,'comp_type_attribute_id' => 3, 'value' => '85']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 45,'comp_type_attribute_id' => 1, 'value' => 'CONTACTAME']);
    }
}
