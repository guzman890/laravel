<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes = Paciente::where('estado',1)->get();

        return view('paciente/index')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paciente/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $paciente =  new Paciente;

        $paciente->dni      =   $request->dni;
        $paciente->nombre   =   $request->nombre;
        $paciente->edad     =   $request->edad;

        $paciente->save();
        
        $pacientes = Paciente::where('estado',1)->get();

        return view('paciente/index')->with('pacientes', $pacientes);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $paciente = Paciente::find($request->dni);
        return view('paciente/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $paciente = Paciente::find($request->dni);
        return view('paciente/edit')->with('paciente', $paciente);
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
        $paciente = Paciente::find($request->dni);

        $paciente->nombre   =   $request->nombre;
        $paciente->edad     =   $request->edad;
        $paciente->save();

        $pacientes = Paciente::where('estado',1)->get();

        return view('paciente/index')->with('pacientes', $pacientes);
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
        $paciente = Paciente::find($request->dni);
        $paciente->estado   =   0;
        $paciente->save();

        $pacientes = Paciente::where('estado',1)->get();

        return view('paciente/index')->with('pacientes', $pacientes);
    }
}
