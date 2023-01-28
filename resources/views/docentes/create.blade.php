@extends('layouts.app')
@section('title')
    Crear nuevo docente
@endsection
@section('content')
    <br>
    <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-primary" type="btn button" href="{{route('docentes.index')}}"><i
                class="fa-solid fa-left-long"></i></a>
    </div>
    <br>
    <div class="row">
        <form class="form-floating" method="post" action="{{route('docentes.store')}}">
            @csrf
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nombre</span>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Apellido Paterno</span>
                <input type="text" class="form-control" name="apellido_Paterno">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Apellido Materno</span>
                <input type="text" class="form-control" name="apellido_Materno">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Telefono</span>
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Telefono de emergencia</span>
                <input type="text" class="form-control" name="telefono_Emergencia">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Grado Academico</span>
                <input type="text" class="form-control" name="grado_Academico">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Especialidad</span>
                <input type="text" class="form-control" name="especialidad">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Sub Especialidad</span>
                <input type="text" class="form-control" name="sub_Especialidad">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Horas por cubrir</span>
                <input type="text" class="form-control" name="horas_x_Cubrir">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Alergias</span>
                <input type="text" class="form-control" name="alergias">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Enfermedades patologicas</span>
                <input type="text" class="form-control" name="enfermedades_Patologicas">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Rol</span>
                <input type="text" class="form-control" name="tipo_Rol">
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
@endsection
