<?php

namespace TuNegocio\Http\Controllers;

use Illuminate\Http\Request;
use TuNegocio\User;
use TuNegocio\Theme;
use TuNegocio\Component;
use TuNegocio\Section;
use TuNegocio\ComponentTypeAttribute;
use TuNegocio\ComponentType;
use TuNegocio\ComponentSectionUserAttribute;

class FrontController extends Controller
{
     /**
     * Show the theme for the url.
     *
     * @param  string  $id
     * @param  Request  $reqest
     * @return Response
     */
    public function __invoke(Request $request, $string)
    {
        // PRUEBAS DE OBTENCIÓN DE DATOS
        // dd(Theme::get()); //TEMAS
        // dd(Theme::get()->first()->users()->first()->name); //NOMBRE DEL UN USUARIO ASOCIADO AL TEMA
        // dd(User::get()); //USUARIOS
        // dd(User::get()->first()->theme()->get()->first()->code); //TEMA DEL USUARIO
        // dd(User::get()->first()->sections()->first()->pivot); //SECCIONES DEL USUARIO (SECTION y SECTION_USER)
        // dd(User::get()->first()->componentSectionsAttributes()->get()->first()); //ATRIBUTOS DE COMPONENTES DE SECCIONES
        // dd(Section::get()->first()->theme()->first()->code); // CODIGO DEL TEMA AL QUE CORRESPONDE EL SECTION
        // dd(Section::get()->first()->users()->get()); // USUARIOS QUE TIENEN SETEADO EL SECTION
        // dd(ComponentTypeAttribute::get()); // COMPONENT TYPE ATTRIBUTES
        // dd(ComponentTypeAttribute::first()->componentType()->first()->name); // NOMBRE DEL COMPONENT TYPE
        // dd(ComponentType::first()); // COMPONENT TYPE
        // dd(ComponentType::first()->attributes()->get()); // ATRIBUTOS DEL COMPONENT TYPE
        // dd(ComponentType::first()->attributes()->first()->name); // NOMBRE DEL PRIMER ATRIBUTO DEL COMPONENT TYPE
        // dd(ComponentType::first()->components()->get()); // COMPONENTES DEL TIPO DE COMPONENTE EN CUESTION
        // dd(ComponentType::first()->components()->first()->name); // NOMBRE DEL PRIMER COMPONENTE DEL TIPO DE COMPONENTE EN CUESTION
        // dd(Component::get()); //COMPONENTES
        // dd(Component::first()->componentType()->get()); //TIPO DE COMPONENTE ASOCIADO AL COMPONENTES

        $urlOrganization = substr($request->path(), strpos($request->path(), '/')+1);
        $user = User::where('url', $urlOrganization)->first();

        if ($user) {
            //OBTENGO LA VISTA A VISUALIZAR
            $theme = $user->theme()->first();
            $view = $theme->code.'/'.$theme->code;
            
            //OBTENGO LOS DATOS A VISUALIZAR
            
            //dd($user->componentSections()->get()->groupBy('section_id')->toArray());
            //dd($user->componentSections()->first()->attributes()->first()->pivot->value);
            $sections = $user->sections();

            //ACCESO A LOS VALORES DE LOS COMPONENTES
            // dd($user->getComponentValue('Inicio','Red Social'));
            // dd($user->getData());
            // dd($user->getComponentValue('Sobre mi','Imagen'));
            // dd($user->getComponentValue('Inicio','Red Social'));
            // foreach ($user->getComponentValue('Inicio','Red Social') as $social) {
            //     echo $social->VALUE;
            // }
            // dd();
            // dd($user->getData()->where('SECTION_NAME', 'Inicio')->where('COMPONENT_NAME', 'Intro')->first()->VALUE);
            // dd($user->getData());

            return view($view, compact('user','sections'));
        }

        return view('welcome');
    }
}
