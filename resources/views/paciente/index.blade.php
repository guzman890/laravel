@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Paciente</div>
                <label for="DNI"></label>
                @foreach ($pacientes as $paciente)

                        <p> {{ $paciente->dni }}  
                        <a type="button" href="/pacienteUpdate?dni={{ $paciente->dni }}" class="btn btn-default">Editar</a> 
                        <a type="button" href="/pacienteDelete?dni={{ $paciente->dni }}" class="btn btn-default">Eliminar</a> </p>
                @endforeach
                
                    
            </div>
        </div>
    </div>
</div>
@endsection
