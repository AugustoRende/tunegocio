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
    	$table = 'component_section_user_attributes';
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 1,'comp_type_attribute_id' => 1, 'value' => 'HOLA A TODOS!']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 2,'comp_type_attribute_id' => 1, 'value' => 'Soy Augusto Rende Giacomelli.']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 3,'comp_type_attribute_id' => 1, 'value' => 'INGENIERO EN SISTEMAS DE INFORMACIÓN']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 4,'comp_type_attribute_id' => 1, 'value' => 'MÁS SOBRE MI']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 5,'comp_type_attribute_id' => 1, 'value' => 'https://www.facebook.com/augustorendegiacomelli']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 5,'comp_type_attribute_id' => 1, 'value' => 'https://www.linkedin.com/in/augusto-rende-giacomelli']);

        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 6,'comp_type_attribute_id' => 1, 'value' => 'SOBRE YO']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 7,'comp_type_attribute_id' => 1, 'value' => 'Una pequeña introducción.']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 8,'comp_type_attribute_id' => 10, 'value' => 'images/profile-pic.jpg']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 9,'comp_type_attribute_id' => 1, 'value' => 'Descripción']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 10,'comp_type_attribute_id' => 21, 'value' => 'PERFIL']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 10,'comp_type_attribute_id' => 22, 'value' => 'Descripción del perfil']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 4, 'value' => 'NOMBRE:']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 5, 'value' => 'Augusto Rende Giacomelli']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 4, 'value' => 'FECHA DE NACIMIENTO:']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 5, 'value' => '16 de Julio de 1992.']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 4, 'value' => 'TRABAJO:']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 5, 'value' => 'Freelancer, Devops, Analista, Diseñador, Desarrollador']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 4, 'value' => 'EMAIL:']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 11,'comp_type_attribute_id' => 5, 'value' => 'augustorendegiacomelli@gmail.com']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 12,'comp_type_attribute_id' => 21, 'value' => 'SKILLS']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 12,'comp_type_attribute_id' => 22, 'value' => 'Descripción de skills']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 2, 'value' => 'HTML5']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 3, 'value' => '90']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 2, 'value' => 'CSS3']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 3, 'value' => '85']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 2, 'value' => 'JQUERY']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 3, 'value' => '70']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 2, 'value' => 'PHP']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 3, 'value' => '95']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 2, 'value' => 'MYSQL']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 3, 'value' => '90']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 2, 'value' => 'ORACLE']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 13,'comp_type_attribute_id' => 3, 'value' => '85']);
        DB::table($table)->insert(['user_id' => 1, 'comp_section_user_id' => 14,'comp_type_attribute_id' => 1, 'value' => 'CONTACTAME']);
        


        //SEGUIR AGREGANDO LOS ITEMS FALTANTES





        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 1,'comp_type_attribute_id' => 1, 'value' => 'HOLIIII!']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 2,'comp_type_attribute_id' => 1, 'value' => 'Soy Lucía Oviedo.']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 3,'comp_type_attribute_id' => 1, 'value' => 'PERSONAL TRAINEER']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 4,'comp_type_attribute_id' => 1, 'value' => 'VER MÁS']);
        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 5,'comp_type_attribute_id' => 1, 'value' => 'luciaoviedolopez']);

        DB::table($table)->insert(['user_id' => 2, 'comp_section_user_id' => 6,'comp_type_attribute_id' => 1, 'value' => 'SOBRE MI']);
    }
}