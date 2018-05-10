<?php

use Illuminate\Database\Seeder;
use TuNegocio\ComponentAttribute;
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
        Component::create(['name' => 'Texto']); //1
        Component::create(['name' => 'Lista Skills']); //2
        Component::create(['name' => 'Lista Datos']); //3
        Component::create(['name' => 'Lista Estudios']); //4
        Component::create(['name' => 'Imagen']); //5
        Component::create(['name' => 'Icono']); //6
        Component::create(['name' => 'Formulario']); //7
        Component::create(['name' => 'Intro']); //8
        
        ComponentAttribute::create(['name' => 'Texto', 'type' => 'TEXT', 'component_id' => 1]); //1
        ComponentAttribute::create(['name' => 'Clave', 'type' => 'TEXT', 'component_id' => 2]); //2
        ComponentAttribute::create(['name' => 'Porcentaje', 'type' => 'NUMBER', 'component_id' => 2]); //3
        ComponentAttribute::create(['name' => 'Clave', 'type' => 'TEXT', 'component_id' => 3]); //4
        ComponentAttribute::create(['name' => 'Valor', 'type' => 'TEXT', 'component_id' => 3]); //5
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_id' => 4]); //6
        ComponentAttribute::create(['name' => 'Subtítulo', 'type' => 'TEXT', 'component_id' => 4]); //7
        ComponentAttribute::create(['name' => 'Fecha', 'type' => 'TEXT', 'component_id' => 4]); //8
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_id' => 4]); //9
        ComponentAttribute::create(['name' => 'Imagen', 'type' => 'TEXT', 'component_id' => 5]); //10
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_id' => 5]); //11
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_id' => 5]); //12
        ComponentAttribute::create(['name' => 'Icono', 'type' => 'TEXT', 'component_id' => 6]); //13
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_id' => 6]); //14
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_id' => 6]); //15
        ComponentAttribute::create(['name' => 'Nombre', 'type' => 'TEXT', 'component_id' => 7]); //16
        ComponentAttribute::create(['name' => 'Email', 'type' => 'TEXT', 'component_id' => 7]); //17
        ComponentAttribute::create(['name' => 'Asunto', 'type' => 'TEXT', 'component_id' => 7]); //18
        ComponentAttribute::create(['name' => 'Mensaje', 'type' => 'TEXT', 'component_id' => 7]); //19
        ComponentAttribute::create(['name' => 'Botón', 'type' => 'TEXT', 'component_id' => 7]); //20
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'component_id' => 8]); //21
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'TEXT', 'component_id' => 8]); //22

    }
}
