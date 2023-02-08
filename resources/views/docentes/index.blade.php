@extends('layouts.app')
@section('title')
    Docentes
@endsection
@section('content')
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary me-md-2" type="btn button" href="{{route('docentes.create')}}">Nuevo docente</a>
    </div>
    <br>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-secondary"><i class="fa-solid fa-user-pen"></i></a>
                    <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('js')
    @if (session('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Docente creado',
                showConfirmButton: true,
                timer: 1500
            }).then(function() {
                location.reload();
            });
        </script>
    @endif
@endsection
