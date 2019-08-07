@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mostrar Paciente</div>
                <input hidden="hidden" type="text" class="form-control" id="idmedico" name="idmedico" value="{{$medico->idmedico}}">

                <div class="form-group">
                    <label for="DNI">DNI:</label>
                    <input type="text" class="form-control" id="dni" name="dni" value="{{$medico->dni}}" readonly>
                </div>

                <div class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$medico->nombre}}" readonly>
                </div>

                <div class="form-group">
                    <label for="Apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{$medico->apellido}}" readonly>
                </div>

                <div class="form-group">
                    <label for="Especialidad">Especialidad : </label>
                    </br>
                    <select name="idespecialidad[]" multiple default="{{ json_encode($idespecialidad,TRUE)}}" readonly>
                        @foreach ($especialidades as $especialidad)
                        <option {{ in_array($especialidad->idespecialidad, $idespecialidad) ? "selected" : "" }} value="{{$especialidad->idespecialidad}}" >{{$especialidad->nombre}}</option> 
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Telefono">Telefono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$medico->telefono}}" readonly>
                </div>

                <div class="form-group">
                    <label for="Direccion">Direccion:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$medico->direccion}}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
