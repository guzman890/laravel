@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Especialidad</div>

                {{ Form::open(['route' => 'Especialidad_Update','method' => 'PUT' ]) }}

                    <div class="form-group">
                        <input hidden="hidden" type="text" class="form-control" id="idespecialidad" name="idespecialidad" value="{{$especialidad->idespecialidad}}">
                    </div>

                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$especialidad->nombre}}">
                    </div>

                    
                    <button type="submit" class="btn btn-default">Guardar</button>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
