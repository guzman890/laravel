@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Paciente
                <a type="button" href="/pacienteCreate" class="btn btn-primary">Nuevo</a> 
                </div>
               
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                        <tr>
                            <td> <a type="button" href="/pacienteShow?dni={{ $paciente->dni }}" class="btn btn-default"> {{ $paciente->dni }} </a> </td>
                            <td> {{ $paciente->apellido }} </td>
                            <td> {{ $paciente->nombre }} </td>
                            <td> <a type="button" href="/pacienteUpdate?dni={{ $paciente->dni }}" class="btn btn-default">Editar</a> </td>
                            <td> <a type="button" href="/pacienteDelete?dni={{ $paciente->dni }}" class="btn btn-default">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
@endsection
