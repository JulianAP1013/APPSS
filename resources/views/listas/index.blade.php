@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista </h1>
    <a href="{{ route('listas.create') }}" class="btn btn-primary">Nueva listas</a>
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>id_usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listas as $lista)
            <tr>
                <td>{{ $lista->id }}</td>
                <td>{{ $lista->nombre }}</td>
                <td>{{ $lista->descripcion }}</td>
                <td>{{ $lista->fecha_creacion }}</td>
                <td>{{ $lista->id_usuario }}</td>
                <td>
                    <a href="{{ route('listas.show', $lista->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('listas.edit', $lista->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('listas.destroy', $lista->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Desactivar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection