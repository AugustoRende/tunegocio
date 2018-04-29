<?php

namespace TuNegocio\Http\Controllers;

use TuNegocio\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
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
        $sections = Section::paginate(10);
        return view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section = new Section;
        return view('section.create', compact('section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SectionCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionCreateRequest $request)
    {
        Section::create($request->all());

        Session::flash('message','Seccion creada correctamente');
        return Redirect::to('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \TuNegocio\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        $user = User::paginate(10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $section = Section::find($id);
        return view('section.edit',['section'=>$section]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SectionUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionUpdateRequest $request, int $id)
    {
        $section = Section::find($id);
        $section->fill($request->all());
        $section->save();

        Session::flash('message','Sección Actualizada correctamente');
        return Redirect::to('/section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $section = Section::find($id);
        $section->delete();
        Session::flash('message','Sección Eliminado correctamente');
        return Redirect::to('/section');
    }
}
