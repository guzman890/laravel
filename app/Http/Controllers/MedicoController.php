<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Especialidad;
use App\Medico_has_especialidad;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Medicos = Medico::where('estado',1)->get();

        return view('medico/index')->with('medicos', $Medicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Especialidades = Especialidad::where('estado',1)->get();

        return view('medico/create')->with('especialidades', $Especialidades);
        
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

        $medico =  new Medico;

        $medico->dni            =   $request->dni;
        $medico->nombre         =   $request->nombre;
        $medico->apellido       =   $request->apellido;
        $medico->telefono       =   $request->telefono;
        $medico->direccion      =   $request->direccion;
        $medico->estado         =   1;
        
        $medico->save();

        $medico = Medico::find($medico->idmedico);
        $idmedico= (int)$medico->idmedico;
        
        //dd($idmedico);

        foreach ($request->idespecialidad as $clave=>$valor) {
            
            $medico_has_especialidad = new Medico_has_especialidad;
            $medico_has_especialidad->medico_idmedico = $idmedico;

            $medico_has_especialidad->especialidad_idespecialidad = $valor ;

            $medico_has_especialidad->save();
        }
        
        $medicos = Medico::where('estado',1)->get();

        return view('medico/index')->with('medicos', $medicos);
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
        $medico = Medico::find($request->idmedico);
        $Especialidades = Especialidad::where('estado',1)->get();
        $Medico_has_especialidadActual = Medico_has_especialidad::where('medico_idmedico',$request->idmedico)->get();
        
        $Idespecialidades = array();

        $Medico_has_especialidadActual = Medico_has_especialidad::where('medico_idmedico',$request->idmedico)->get();
        foreach ($Medico_has_especialidadActual as $valorActual) {
            $Idespecialidades[] = $valorActual->especialidad_idespecialidad; 
        }

        return view('medico/show')            
            ->with('medico', $medico)
            ->with('especialidades', $Especialidades)
            ->with('idespecialidad', $Idespecialidades);
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
        $medico = Medico::find($request->idmedico);
        $Especialidades = Especialidad::where('estado',1)->get();
        $Medico_has_especialidadActual = Medico_has_especialidad::where('medico_idmedico',$request->idmedico)->get();
        
        $Idespecialidades = array();

        $Medico_has_especialidadActual = Medico_has_especialidad::where('medico_idmedico',$request->idmedico)->get();
        foreach ($Medico_has_especialidadActual as $valorActual) {
            $Idespecialidades[] = $valorActual->especialidad_idespecialidad; 
        }

        //dd($Idespecialidades);
        return view('medico/edit')
            ->with('medico', $medico)
            ->with('especialidades', $Especialidades)
            ->with('idespecialidad', $Idespecialidades);
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
        $medico = Medico::find($request->idmedico);

        $medico->nombre         =   $request->nombre;
        $medico->apellido       =   $request->apellido;
        $medico->telefono       =   $request->telefono;
        $medico->direccion      =   $request->direccion;
        $medico->especialidad   =   $request->especialidad;
        
        $medico->save();
        
        $Medico_has_especialidadActual = Medico_has_especialidad::where('medico_idmedico',$request->idmedico)->get();
        foreach ($Medico_has_especialidadActual as $valorActual) {
            $valorActual->destroy();
        }

        foreach ($request->idespecialidad as $valor) {
            $Medico_has_especialidad = new Medico_has_especialidad;
            $Medico_has_especialidad->medico_idmedico = $medico->idmedico;
            $Medico_has_especialidad->especialidad_idespecialidad = $valor ;
        }

        $medicos = Medico::where('estado',1)->get();

        return view('medico/index')->with('medicos', $medicos);
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
        $medico = Medico::find($request->dni);
        $medico->estado   =   0;
        $medico->save();

        $medicos = Medico::where('estado',1)->get();

        return view('medico/index')->with('medicos', $medicos);
    }
}
