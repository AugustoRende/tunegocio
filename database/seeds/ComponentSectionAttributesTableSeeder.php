<?php

use Illuminate\Database\Seeder;

class ComponentSectionAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'component_section_attribute';
        //INTRO
        DB::table($table)->insert(['comp_section_id' => 1,'comp_attribute_id' => 1, 'value' => 'HOLA A TODOS!']);
        DB::table($table)->insert(['comp_section_id' => 2,'comp_attribute_id' => 1, 'value' => 'Soy Augusto Rende Giacomelli.']);
        DB::table($table)->insert(['comp_section_id' => 3,'comp_attribute_id' => 1, 'value' => 'INGENIERO EN SISTEMAS DE INFORMACIÓN']);
        DB::table($table)->insert(['comp_section_id' => 4,'comp_attribute_id' => 1, 'value' => 'MÁS SOBRE MI']);
        DB::table($table)->insert(['comp_section_id' => 5,'comp_attribute_id' => 1, 'value' => 'https://www.facebook.com/augustorendegiacomelli']);
        DB::table($table)->insert(['comp_section_id' => 5,'comp_attribute_id' => 1, 'value' => 'https://www.linkedin.com/in/augusto-rende-giacomelli']);
        DB::table($table)->insert(['comp_section_id' => 5,'comp_attribute_id' => 1, 'value' => 'https://www.instagram.com/augusto-rende-giacomelli']);

        //ABOUT
        DB::table($table)->insert(['comp_section_id' => 6,'comp_attribute_id' => 1, 'value' => 'SOBRE YO']);
        DB::table($table)->insert(['comp_section_id' => 7,'comp_attribute_id' => 1, 'value' => 'Una pequeña introducción.']);
        DB::table($table)->insert(['comp_section_id' => 8,'comp_attribute_id' => 1, 'value' => 'images/profile-pic.jpg']);
        DB::table($table)->insert(['comp_section_id' => 9,'comp_attribute_id' => 1, 'value' => 'Descripción']);
        DB::table($table)->insert(['comp_section_id' => 10,'comp_attribute_id' => 21, 'value' => 'PERFIL']);
        DB::table($table)->insert(['comp_section_id' => 10,'comp_attribute_id' => 22, 'value' => 'Descripción del perfil']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 4, 'value' => 'NOMBRE:']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 5, 'value' => 'Augusto Rende Giacomelli']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 4, 'value' => 'FECHA DE NACIMIENTO:']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 5, 'value' => '16 de Julio de 1992.']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 4, 'value' => 'TRABAJO:']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 5, 'value' => 'Freelancer, Devops, Analista, Diseñador, Desarrollador']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 4, 'value' => 'EMAIL:']);
        DB::table($table)->insert(['comp_section_id' => 11,'comp_attribute_id' => 5, 'value' => 'augustorendegiacomelli@gmail.com']);
        DB::table($table)->insert(['comp_section_id' => 12,'comp_attribute_id' => 21, 'value' => 'SKILLS']);
        DB::table($table)->insert(['comp_section_id' => 12,'comp_attribute_id' => 22, 'value' => 'Descripción de skills']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 2, 'value' => 'HTML5']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 3, 'value' => '90']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 2, 'value' => 'CSS3']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 3, 'value' => '85']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 2, 'value' => 'JQUERY']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 3, 'value' => '70']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 2, 'value' => 'PHP']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 3, 'value' => '95']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 2, 'value' => 'MYSQL']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 3, 'value' => '90']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 2, 'value' => 'ORACLE']);
        DB::table($table)->insert(['comp_section_id' => 13,'comp_attribute_id' => 3, 'value' => '85']);
        DB::table($table)->insert(['comp_section_id' => 14,'comp_attribute_id' => 1, 'value' => 'CONTACTAME']);

        //RESUME
        DB::table($table)->insert(['comp_section_id' => 15,'comp_attribute_id' => 1, 'value' => 'EXPERIENCIAS']);
        DB::table($table)->insert(['comp_section_id' => 16,'comp_attribute_id' => 1, 'value' => 'Mis Acreditaciones.']);
        DB::table($table)->insert(['comp_section_id' => 17,'comp_attribute_id' => 1, 'value' => 'A continuación se puede observar la formación que he obtenido tanto en el ámbito académico como en el laboral.']);
        DB::table($table)->insert(['comp_section_id' => 18,'comp_attribute_id' => 1, 'value' => 'Estudios Realizados']);
        //ESTUDIOS 1
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 6, 'value' => 'Bachiller en Economía y Gestión de las Organizaciones']);
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 7, 'value' => 'Escuela Normal N°1 - Mary O. Graham - Argentina, Buenos Aires, La Plata']);
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 8, 'value' => 'Enero 2008 - Diciembre 2010']);
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 9, 'value' => 'En esta institución pasé gran parte de mi infancia y adolescencia. Sin dudas me queda un gran recuerdo de aquel lugar en el que supe recibir todas las herramientas necesarias para iniciar mi carrera universitaria.']);
        //ESTUDIOS 2
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 6, 'value' => 'Ingeniería en Sistemas de Información']);
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 7, 'value' => 'Universidad Tecnológica Nacional - Argentina, Buenos Aires, La Plata']);
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 8, 'value' => 'Febrero 2011 - Marzo 2017']);
        DB::table($table)->insert(['comp_section_id' => 19,'comp_attribute_id' => 9, 'value' => 'Un gran desafío en mi vida. Con altibajos y mucho esfuerzo logré llevar adelante la carrera de grado. Un lugar muy propocio para el crecimiento personal y profesional.']);
        
        DB::table($table)->insert(['comp_section_id' => 20,'comp_attribute_id' => 1, 'value' => 'Trabajos']);
        //TRABAJOS 1
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 6, 'value' => 'Desarrollador (C# - .Net)']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 7, 'value' => 'Accenture - Argentina, Buenos Aires, La Plata']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 8, 'value' => 'Junio 2014 - Octubre 2014']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 9, 'value' => 'Mi primer experiencia laboral en el ámbito informático. Una linda pero corta experiencia. Me gustaría haber trabajado un tiempo más en este lugar, pero una mejor oportunidad se cruzó en mi camino y decidí cambiar de rumbo.']);
        //TRABAJOS 2
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 6, 'value' => 'Analista, Diseñador, Desarrollador (Oracle, Visual Basic 6.0)']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 7, 'value' => 'Ministerio de Economía - Argentina, Buenos Aires, La Plata']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 8, 'value' => 'Octubre 2014 - Septiembre 2017']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 9, 'value' => 'Una oportunidad que llegó casi sin buscarla. Un lindo recorrido de 3 años en el cual pude generar buenas bases de conocimiento. Pude profundizar todo lo necesario en tecnologías de hace algún tiempo. Uno de los puntos a destacar es el trabajo con bases de datos Oracle de gran tamaño y complejidad.']);
        //TRABAJOS 3
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 6, 'value' => 'Ingeniero DevOps']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 7, 'value' => 'Ministerio de Economía - Argentina, Buenos Aires, La Plata']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 8, 'value' => 'Septiembre 2017 - Actualidad']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 9, 'value' => 'Un gran paso en mi carrera profesional. Un punto de partida para comenzar a ver el software desde un lugar más macro. Teniendo en cuenta temas como infraestructura, planificación, automatización, monitoreo, gestión.']);
        //TRABAJOS 4
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 6, 'value' => 'Líder de Proyecto']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 7, 'value' => 'Julasoft SA - Argentina, Buenos Aires, La Plata']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 8, 'value' => 'Febrero 2015 - Actualidad']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 9, 'value' => 'Siempre sostuve que no quería ser toda mi vida un desarrollador que va de un framework en otro, sino que quería ir un paso más allá. Una gran oportunidad se me presentó y no podía dejarla pasar. Así es que comencé de a poco a gestionar proyectos tanto hacia adentro de la empresa, como hacia afuera en la relación con los clientes.']);
        //TRABAJOS 5
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 6, 'value' => 'Co-Fundador']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 7, 'value' => 'InfinIT - Soluciones de Software']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 8, 'value' => 'Enero 2018 - Actualidad']);
        DB::table($table)->insert(['comp_section_id' => 21,'comp_attribute_id' => 9, 'value' => 'El sueño de todo estudiante de Sistemas de Información. Comenzar un emprendimiento personal junto con un amigo de toda la vida, y completarlo con personas de confianza con las que te ha tocado trabajar a lo largo de tu formación profesional parece una ecuación ideal. Estamos al inicio del camino, con muchas energías y recorrido por delante.']);

        //PORTFOLIO
        DB::table($table)->insert(['comp_section_id' => 22,'comp_attribute_id' => 1, 'value' => 'MIS HOBBIES']);
        DB::table($table)->insert(['comp_section_id' => 23,'comp_attribute_id' => 1, 'value' => 'Algo de lo que me apasiona.']);
        //GALERIA 1
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 10, 'value' => 'images/portfolio/futbol.jpg']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 11, 'value' => 'Fútbol']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 12, 'value' => 'Sin dudas el fútbol es mi cable a tierra. Practico este deporte desde los 4 años, y es el momento en el que todos los problemas se borran de mi cabeza y se llena de puro disfrute.']);
        //GALERIA 2
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 10, 'value' => 'images/portfolio/photo.jpg']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 11, 'value' => 'Fotografía']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 12, 'value' => 'La fotografía es otra de mis pasatiempos favoritos. En mis tardes libres suelo salir a tomar un poco de aire fresco, y nunca olvido llevar mi cámara. Siempre se encuentra alguna buena imagen para retratar.']);
        //GALERIA 3
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 10, 'value' => 'images/portfolio/travel.jpg']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 11, 'value' => 'Viajar']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 12, 'value' => 'Y claro, no podía faltar VIAJAR. Cada vez que voy a salir a la ruta paso horas analizando los caminos a realizar y las atracciones por visitar. Tengo planeado recorrer todo el país. Para esto, voy marcando en un mapa a medida que conozco los distintos lugares de mi país.']);
        //GALERIA 4
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 10, 'value' => 'images/portfolio/piano.jpg']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 11, 'value' => 'Piano']);
        DB::table($table)->insert(['comp_section_id' => 24,'comp_attribute_id' => 12, 'value' => 'Desde chico me sentí atraído por la música, y siempre tuve ganas de poder tocarla yo mismo. El año pasado pude hacer un espacio en mi día a día para comenzar a tocar el piano. Todavía soy un principiante, pero de a poco iré mejorando.']);

        //SERVICIOS
        DB::table($table)->insert(['comp_section_id' => 25,'comp_attribute_id' => 1, 'value' => 'MIS HOBBIES']);
        DB::table($table)->insert(['comp_section_id' => 26,'comp_attribute_id' => 1, 'value' => 'Algo de lo que me apasiona.']);
        //SERVICIO 1
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 13, 'value' => 'icon-earth']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 14, 'value' => 'Soluciones de Software']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 15, 'value' => 'Descripcion']);
        //SERVICIO 2
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 13, 'value' => 'icon-window']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 14, 'value' => 'Titulo']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 15, 'value' => 'Descripcion']);
        //SERVICIO 3
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 13, 'value' => 'fa fa-plug']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 14, 'value' => 'Desarrollo Web']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 15, 'value' => 'Descripcion']);
        //SERVICIO 4
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 13, 'value' => 'fa fa-database']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 14, 'value' => 'Administrador de Bases de Datos']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 15, 'value' => 'Descripcion']);
        //SERVICIO 5
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 13, 'value' => 'icon-chat']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 14, 'value' => 'Consultoría']);
        DB::table($table)->insert(['comp_section_id' => 27,'comp_attribute_id' => 15, 'value' => 'Descripcion']);

        //CONTACTO
        DB::table($table)->insert(['comp_section_id' => 28,'comp_attribute_id' => 1, 'value' => 'CONTACTO']);
        DB::table($table)->insert(['comp_section_id' => 29,'comp_attribute_id' => 1, 'value' => 'Estoy esperando a que me contactes.']);
        //TODO: TERMINAR
    }
}