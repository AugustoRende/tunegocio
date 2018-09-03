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
        Component::create(['name' => 'Plan']); //9
        Component::create(['name' => 'Team']); //10

        ComponentAttribute::create(['name' => 'Texto', 'type' => 'TEXT', 'order' => 1, 'component_id' => 1]); //1
        ComponentAttribute::create(['name' => 'Clave', 'type' => 'TEXT', 'order' => 1, 'component_id' => 2]); //2
        ComponentAttribute::create(['name' => 'Porcentaje', 'type' => 'NUMBER', 'order' => 2, 'component_id' => 2]); //3
        ComponentAttribute::create(['name' => 'Clave', 'type' => 'TEXT', 'order' => 1, 'component_id' => 3]); //4
        ComponentAttribute::create(['name' => 'Valor', 'type' => 'TEXT', 'order' => 2, 'component_id' => 3]); //5
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'order' => 1, 'component_id' => 4]); //6
        ComponentAttribute::create(['name' => 'Subtítulo', 'type' => 'TEXT', 'order' => 2, 'component_id' => 4]); //7
        ComponentAttribute::create(['name' => 'Fecha', 'type' => 'TEXT', 'order' => 3, 'component_id' => 4]); //8
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'LONG_TEXT', 'order' => 4, 'component_id' => 4]); //9
        ComponentAttribute::create(['name' => 'Imagen', 'type' => 'IMG', 'order' => 1, 'component_id' => 5]); //10
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'order' => 2, 'component_id' => 5]); //11
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'LONG_TEXT', 'order' => 3, 'component_id' => 5]); //12
        ComponentAttribute::create(['name' => 'Icono', 'type' => 'ICON', 'order' => 1, 'component_id' => 6]); //13
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'order' => 2, 'component_id' => 6]); //14
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'LONG_TEXT', 'order' => 3, 'component_id' => 6]); //15
        ComponentAttribute::create(['name' => 'Nombre', 'type' => 'TEXT', 'order' => 1, 'component_id' => 7]); //16
        ComponentAttribute::create(['name' => 'Email', 'type' => 'TEXT', 'order' => 2, 'component_id' => 7]); //17
        ComponentAttribute::create(['name' => 'Asunto', 'type' => 'TEXT', 'order' => 3, 'component_id' => 7]); //18
        ComponentAttribute::create(['name' => 'Mensaje', 'type' => 'TEXT', 'order' => 4, 'component_id' => 7]); //19
        ComponentAttribute::create(['name' => 'Botón', 'type' => 'TEXT', 'order' => 5, 'component_id' => 7]); //20
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'order' => 1, 'component_id' => 8]); //21
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'LONG_TEXT', 'order' => 2, 'component_id' => 8]); //22
        ComponentAttribute::create(['name' => 'Título', 'type' => 'TEXT', 'order' => 1, 'component_id' => 9]); //23
        ComponentAttribute::create(['name' => 'Monto', 'type' => 'TEXT', 'order' => 2, 'component_id' => 9]); //24
        ComponentAttribute::create(['name' => 'Descripción', 'type' => 'LONG_TEXT', 'order' => 3, 'component_id' => 9]); //25
        ComponentAttribute::create(['name' => 'Botón', 'type' => 'TEXT', 'order' => 4, 'component_id' => 9]); //26
        ComponentAttribute::create(['name' => 'Imagen', 'type' => 'IMG', 'order' => 1, 'component_id' => 10]); //27
        ComponentAttribute::create(['name' => 'Nombre', 'type' => 'TEXT', 'order' => 2, 'component_id' => 10]); //28
        ComponentAttribute::create(['name' => 'Puesto', 'type' => 'TEXT', 'order' => 3, 'component_id' => 10]); //29
        ComponentAttribute::create(['name' => 'Red Social 1', 'type' => 'TEXT', 'order' => 4, 'component_id' => 10]); //30
        ComponentAttribute::create(['name' => 'Red Social 2', 'type' => 'TEXT', 'order' => 5, 'component_id' => 10]); //31
        ComponentAttribute::create(['name' => 'Red Social 3', 'type' => 'TEXT', 'order' => 6, 'component_id' => 10]); //32
        ComponentAttribute::create(['name' => 'Red Social 4', 'type' => 'TEXT', 'order' => 7, 'component_id' => 10]); //33
        ComponentAttribute::create(['name' => 'Red Social 5', 'type' => 'TEXT', 'order' => 8, 'component_id' => 10]); //34
    }
}
