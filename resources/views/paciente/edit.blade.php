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
                        <label for="Apellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{$paciente->apellido}}">
                    </div>

                    <div class="form-group">
                        <label for="Edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" value="{{$paciente->edad}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="Talla">Talla:</label>
                        <input type="number" class="form-control" id="talla" name="talla" value="{{$paciente->talla}}" step=".01">
                    </div>

                    <div class="form-group">
                        <label for="Telefono">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$paciente->telefono}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="Direccion">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$paciente->direccion}}">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Guardar</button>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
