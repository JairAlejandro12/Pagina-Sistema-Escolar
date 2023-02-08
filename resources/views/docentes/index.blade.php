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
            @foreach($docentes as $docente)
                <tr>
                    <th scope="row">{{$docente->id}}</th>
                    <td>{{$docente->name}}</td>
                    <td>{{$docente->apellido_Paterno}}</td>
                    <td>{{$docente->telefono}}</td>
                    <td>
                        <a href="{{route('docentes.show',['docente' => $docente->id])}}" class="btn btn-primary"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="{{route('docentes.edit', ['docente' => $docente->id])}}" class="btn btn-secondary"><i
                                class="fa-solid fa-user-pen"></i></a>
                        <form action="{{route('docentes.destroy', ['docente' => $docente->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
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
            }).then(function () {
                location.reload();
            });
        </script>
    @endif
    @if (session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Docente actualizado con exito',
                showConfirmButton: true,
                timer: 1500
            }).then(function () {
                location.reload();
            });
        </script>
    @endif
    @if (session('destroy'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Docente eliminado con exito',
                showConfirmButton: true,
                timer: 1500
            }).then(function () {
                location.reload();
            });
        </script>
    @endif
@endsection
