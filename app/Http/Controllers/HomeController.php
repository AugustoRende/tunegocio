<?php

namespace TuNegocio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        
        // Get sections for the user
        //$sections = $user->sections();
        $sections = $user->getSectionsToEdit();
        
        // Get all Themes
        $themes = Theme::get();

        return view('home',compact('user','themes','sections'));
    }


    // TODO: Ver donde iría esta funcionalidad
    public function updateTheme(Request $request)
    {
        $user = Auth::user();
        $user->theme_id = $request->theme_id;

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

    public function saveValue(Request $request)
    {
        Auth::user()->updateValue($request->csua_id, $request->newValue, $request->visible);

        return response()->json(['response' => 'Sus cambios han sido guardados satisfactoriamente.']);
    }

    public function uploadImage(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();

            Storage::disk('public')->putFileAs($user->url, $image, $fileName);

            $value = 'storage/'.$user->url.'/'.$fileName;
            $user->updateValue($request->csua_id, $value, NULL);

            return response()->json(['response' => 'Sus cambios han sido guardados satisfactoriamente.']);
        }
    }
    
    public function updateSectionVisibility(Request $request)
    {
        Auth::user()->updateSectionVisibility($request->section_id,$request->visible);

        return response()->json(['response' => 'Sus cambios han sido guardados satisfactoriamente.']);
    }

}
