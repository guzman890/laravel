@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Lista de Especialidades
                <a type="button" href="/especialidadCreate" class="btn btn-primary">Nuevo</a> 
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($especialidades as $especialidad)
                        <tr>
                            <td><a type="button" href="/especialidadShow?idespecialidad={{ $especialidad->idespecialidad }}" class="btn btn-default">{{ $especialidad->nombre }} </a> </td>
                            <td><a type="button" href="/especialidadUpdate?idespecialidad={{ $especialidad->idespecialidad }}" class="btn btn-default">Editar</a> </td> 
                            <td><a type="button" href="/especialidadDelete?idespecialidad={{ $especialidad->idespecialidad }}" class="btn btn-default">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                    
            </div>
        </div>
    </div>
</div>
@endsection
