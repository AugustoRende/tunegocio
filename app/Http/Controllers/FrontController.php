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
            $theme = $user->theme()->first();
            $view = $theme->code.'/'.$theme->code;
            
            return view($view);
        }

        return view('welcome');
    }
}
