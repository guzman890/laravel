@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Paciente</div>

                {{ Form::open(['route' => 'Paciente_Update','method' => 'PUT' ]) }}

                    <div class="form-group">
                        <label for="DNI">DNI:</label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{$paciente->dni}}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$paciente->nombre}}">
                    </div>

                    <div class="form-group">
                        <label for="Edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" value="{{$paciente->edad}}">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Guardar</button>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
