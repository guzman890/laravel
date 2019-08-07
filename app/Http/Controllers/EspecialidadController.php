<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Especialidades = Especialidad::where('estado',1)->get();

        return view('especialidad/index')->with('especialidades', $Especialidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('especialidad/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $especialidad =  new Especialidad;

        $especialidad->nombre   =   $request->nombre;

        $especialidad->save();
        
        $especialidades = Especialidad::where('estado',1)->get();

        return view('especialidad/index')->with('especialidades', $especialidades);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $especialidad = Especialidad::find($request->idespecialidad);
        return view('especialidad/show')->with('especialidad', $especialidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $especialidad = Especialidad::find($request->idespecialidad);
        return view('especialidad/edit')->with('especialidad', $especialidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $especialidad = Especialidad::find($request->idespecialidad);

        $especialidad->nombre   =   $request->nombre;

        $especialidad->save();

        $especialidades = Especialidad::where('estado',1)->get();

        return view('especialidad/index')->with('especialidades', $especialidades);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $especialidad = Especialidad::find($request->idespecialidad);
        $especialidad->estado   =   0;
        $especialidad->save();

        $especialidades = Especialidad::where('estado',1)->get();

        return view('especialidad/index')->with('especialidades', $especialidades);
    }
}
