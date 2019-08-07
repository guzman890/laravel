@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Lista de Medico
                <a type="button" href="/medicoCreate" class="btn btn-primary">Nuevo</a> 
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
                        @foreach ($medicos as $medico)
                        <tr>
                            <td> <a type="button" href="/medicoShow?idmedico={{ $medico->idmedico }}" class="btn btn-default">{{ $medico->dni }}</a> </td>
                            <td>{{ $medico->apellido }} </td>
                            <td>{{ $medico->nombre }}</td>
                            <td><a type="button" href="/medicoUpdate?idmedico={{ $medico->idmedico }}" class="btn btn-default">Editar</a> </td> 
                            <td><a type="button" href="/medicoDelete?idmedico={{ $medico->idmedico }}" class="btn btn-default">Eliminar</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
@endsection
