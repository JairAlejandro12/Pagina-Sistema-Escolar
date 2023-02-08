@extends('layouts.app')
@section('title')
    Editor de informacion
@endsection
@section('content')
    <br>
    <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-primary" type="btn button" href="{{route('docentes.index')}}"><i
                class="fa-solid fa-left-long"></i></a>
    </div>
    <br>
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form class="form-floating" method="post" action="{{route('docentes.update', ['docente' => $docenteSelected->id])}}">
            @csrf
            @method('PUT')
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nombre</span>
                <input type="text" class="form-control" name="name" value="{{$docenteSelected->name}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Email</span>
                <input type="email" class="form-control" name="email" value="{{$docenteSelected->email}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Apellido Paterno</span>
                <input type="text" class="form-control" name="apellido_Paterno" value="{{$docenteSelected->apellido_Paterno}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Apellido Materno</span>
                <input type="text" class="form-control" name="apellido_Materno" value="{{$docenteSelected->apellido_Materno}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Telefono</span>
                <input type="text" class="form-control" name="telefono" value="{{$docenteSelected->telefono}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Telefono de emergencia</span>
                <input type="text" class="form-control" name="telefono_Emergencia" value="{{$docenteSelected->telefono_Emergencia}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Grado Academico</span>
                <input type="text" class="form-control" name="grado_Academico" value="{{$docenteSelected->grado_Academico}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Especialidad</span>
                <input type="text" class="form-control" name="especialidad" value="{{$docenteSelected->especialidad}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Sub Especialidad</span>
                <input type="text" class="form-control" name="sub_Especialidad" value="{{$docenteSelected->sub_Especialidad}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Horas por cubrir</span>
                <input type="number" class="form-control" name="horas_x_Mes" value="{{$docenteSelected->horas_x_Mes}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Alergias</span>
                <input type="text" class="form-control" name="alergias" value="{{$docenteSelected->alergias}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Enfermedades patologicas</span>
                <input type="text" class="form-control" name="enfermedades_Patologicas" value="{{$docenteSelected->enfermedades_Patologicas}}" required>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Rol</span>
                <input type="text" class="form-control" name="tipo_Rol" value="{{$docenteSelected->tipo_Rol}}" required>
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
@endsection
