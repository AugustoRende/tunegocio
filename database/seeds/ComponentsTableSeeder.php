<?php

use Illuminate\Database\Seeder;
use TuNegocio\ComponentType;
use TuNegocio\ComponentTypeAttribute;
use TuNegocio\Component;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComponentType::create(['name' => 'Texto']); //1
        ComponentType::create(['name' => 'Lista Skills']); //2
        ComponentType::create(['name' => 'Lista Datos']); //3
        ComponentType::create(['name' => 'Lista Estudios']); //4
        ComponentType::create(['name' => 'Imagen']); //5
        ComponentType::create(['name' => 'Icono']); //6
        ComponentType::create(['name' => 'Formulario']); //7
        ComponentType::create(['name' => 'Intro']); //8
        
        ComponentTypeAttribute::create(['name' => 'Texto', 'type' => 'TEXT', 'component_type_id' => 1]); //1
        ComponentTypeAttribute::create(['name' => 'Clave', 'type' => 'TEXT', 'component_type_id' => 2]); //2
        ComponentTypeAttribute::create(['name' => 'Porcentaje', 'type' => 'NUMBER', 'component_type_id' => 2]); //3
        ComponentTypeAttribute::create(['name' => 'Clave', 'type' => 'TEXT', 'component_type_id' => 3]); //4
        ComponentTypeAttribute::create(['name' => 'Valor', 'type' => 'TEXT', 'component_type_id' => 3]); //5
        ComponentTypeAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_type_id' => 4]); //6
        ComponentTypeAttribute::create(['name' => 'Subtítulo', 'type' => 'TEXT', 'component_type_id' => 4]); //7
        ComponentTypeAttribute::create(['name' => 'Fecha', 'type' => 'TEXT', 'component_type_id' => 4]); //8
        ComponentTypeAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_type_id' => 4]); //9
        ComponentTypeAttribute::create(['name' => 'Imagen', 'type' => 'TEXT', 'component_type_id' => 5]); //10
        ComponentTypeAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_type_id' => 5]); //11
        ComponentTypeAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_type_id' => 5]); //12
        ComponentTypeAttribute::create(['name' => 'Icono', 'type' => 'TEXT', 'component_type_id' => 6]); //13
        ComponentTypeAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_type_id' => 6]); //14
        ComponentTypeAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_type_id' => 6]); //15
        ComponentTypeAttribute::create(['name' => 'Nombre', 'type' => 'TEXT', 'component_type_id' => 7]); //16
        ComponentTypeAttribute::create(['name' => 'Email', 'type' => 'TEXT', 'component_type_id' => 7]); //17
        ComponentTypeAttribute::create(['name' => 'Asunto', 'type' => 'TEXT', 'component_type_id' => 7]); //18
        ComponentTypeAttribute::create(['name' => 'Mensaje', 'type' => 'TEXT', 'component_type_id' => 7]); //19
        ComponentTypeAttribute::create(['name' => 'Botón', 'type' => 'TEXT', 'component_type_id' => 7]); //20
        ComponentTypeAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_type_id' => 8]); //21
        ComponentTypeAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_type_id' => 8]); //22

        Component::create(['name' => 'Intro', 'component_type_id' => 1, 'section_id' => 1]); //1
        Component::create(['name' => 'Título', 'component_type_id' => 1, 'section_id' => 1]);
        Component::create(['name' => 'Subtítulo', 'component_type_id' => 1, 'section_id' => 1]);
        Component::create(['name' => 'Botón', 'component_type_id' => 1, 'section_id' => 1]);
        Component::create(['name' => 'Red Social', 'component_type_id' => 1, 'section_id' => 1]);
        
        Component::create(['name' => 'Intro', 'component_type_id' => 1, 'section_id' => 2]); //6
        Component::create(['name' => 'Título', 'component_type_id' => 1, 'section_id' => 2]);
        Component::create(['name' => 'Imagen', 'component_type_id' => 1, 'section_id' => 2]);
        Component::create(['name' => 'Descripción', 'component_type_id' => 1, 'section_id' => 2]);
        Component::create(['name' => 'Intro Perfil', 'component_type_id' => 8, 'section_id' => 2]);
        Component::create(['name' => 'Perfil', 'component_type_id' => 3, 'section_id' => 2]);
        Component::create(['name' => 'Intro Skills', 'component_type_id' => 8, 'section_id' => 2]);
        Component::create(['name' => 'Skills', 'component_type_id' => 2, 'section_id' => 2]); //13
        Component::create(['name' => 'Botón', 'component_type_id' => 1, 'section_id' => 2]);
        
        Component::create(['name' => 'Intro', 'component_type_id' => 1, 'section_id' => 3]);
        Component::create(['name' => 'Título', 'component_type_id' => 1, 'section_id' => 3]);
        Component::create(['name' => 'Descripción', 'component_type_id' => 1, 'section_id' => 3]);
        Component::create(['name' => 'Subtítulo', 'component_type_id' => 1, 'section_id' => 3]);
        Component::create(['name' => 'Estudios', 'component_type_id' => 4, 'section_id' => 3]);
        Component::create(['name' => 'Subtítulo', 'component_type_id' => 1, 'section_id' => 3]);
        Component::create(['name' => 'Trabajos', 'component_type_id' => 4, 'section_id' => 3]);

        Component::create(['name' => 'Intro', 'component_type_id' => 1, 'section_id' => 4]);
        Component::create(['name' => 'Título', 'component_type_id' => 1, 'section_id' => 4]);
        Component::create(['name' => 'Galería', 'component_type_id' => 5, 'section_id' => 4]);

        Component::create(['name' => 'Intro', 'component_type_id' => 1, 'section_id' => 5]);
        Component::create(['name' => 'Título', 'component_type_id' => 1, 'section_id' => 5]);
        Component::create(['name' => 'Carrousel', 'component_type_id' => 6, 'section_id' => 5]);
        
        Component::create(['name' => 'Intro', 'component_type_id' => 1, 'section_id' => 6]);
        Component::create(['name' => 'Título', 'component_type_id' => 1, 'section_id' => 6]);
        Component::create(['name' => 'Formulario', 'component_type_id' => 7, 'section_id' => 6]);
        Component::create(['name' => 'Info', 'component_type_id' => 6, 'section_id' => 6]);

    }
}
