<?php

namespace TuNegocio\Http\Controllers;

use Illuminate\Http\Request;
use TuNegocio\User;

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
    	$urlOrganization = substr($request->path(), strpos($request->path(), '/')+1);
        $user = User::where('url', $urlOrganization)->first();

        if ($user) {
            //OBTENGO LA VISTA A VISUALIZAR
            $theme = $user->theme()->first();
            $view = $theme->code.'/'.$theme->code;
            
            //OBTENGO LOS DATOS A VISUALIZAR
            $sections = $user->sections()->where('visible',1)->get();

           // dd($sections[0]->pivot->background_color);
            return view($view, compact('user','sections'));
        }

        return view('welcome');
    }
}
