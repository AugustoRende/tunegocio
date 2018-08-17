<?php

namespace TuNegocio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TuNegocio\Theme;
use TuNegocio\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get the currently authenticated user...
        $user = Auth::user();
        
        // Get the user theme
        $theme = Theme::find($user->theme_id);

        // Get all Themes
        $themes = Theme::get();

        return view('home',compact('user','themes','theme'));
    }

    // TODO: Ver donde iría esta funcionalidad
    public function updateTheme($theme_id)
    {
        $user = Auth::user();
        $user->theme_id = $theme_id;

        $user->save();

        //TODO: Ver qué necesito enviar como respuesta
        return response()->json(['response' => 'Sus cambios han sido guardados satisfactoriamente.']);
    }


    public function generateTheme()
    {
        Auth::user()->generateTheme();

        //TODO: Ver qué necesito enviar como respuesta
        return response()->json(['response' => 'Sus cambios han sido guardados satisfactoriamente.']);
    }
}
