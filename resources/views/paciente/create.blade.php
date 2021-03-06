@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Paciente</div>

                {{ Form::open(['route' => 'Paciente_Storage','method' => 'POST' ]) }}

                    <div class="form-group">
                        <label for="DNI">DNI:</label>
                        <input type="text" class="form-control" id="dni" name="dni">
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="Apellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>

                    <div class="form-group">
                        <label for="Edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                    
                    <div class="form-group">
                        <label for="Talla">Talla:</label>
                        <input type="number" class="form-control" id="talla" name="talla" step=".01">
                    </div>

                    <div class="form-group">
                        <label for="Telefono">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    
                    <div class="form-group">
                        <label for="Direccion">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Guardar</button>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
