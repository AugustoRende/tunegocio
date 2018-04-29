<?php

namespace TuNegocio\Http\Controllers;

use TuNegocio\Theme;
use Illuminate\Http\Request;
use TuNegocio\Http\Requests\ThemeCreateRequest;
use TuNegocio\Http\Requests\ThemeUpdateRequest;

class ThemeController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::paginate(10);
        return view('themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theme = new Theme;
        return view('theme.create', compact('theme'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ThemeCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemeCreateRequest $request)
    {
        Theme::create($request->all());

        Session::flash('message','Tema creado correctamente');
        return Redirect::to('/theme');
    }

    /**
     * Display the specified resource.
     *
     * @param  \TuNegocio\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        $themes = Theme::paginate(10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int                        $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $theme = Theme::find($id);
        return view('theme.edit',['theme'=>$theme]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ThemeUpdateRequest  $request
     * @param  int                       $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThemeUpdateRequest $request, int $id)
    {
        $theme = Theme::find($id);
        $theme->fill($request->all());
        $theme->save();

        Session::flash('message','Tema Actualizado correctamente');
        return Redirect::to('/theme');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $theme = Theme::find($id);
        $theme->delete();
        Session::flash('message','Tema Eliminado correctamente');
        return Redirect::to('/theme');
    }
}
