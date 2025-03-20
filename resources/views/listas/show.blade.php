@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $lista->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $lista->nombre }}</td>
        </tr>
        <tr>
            <th>Descripcion</th>
            <td>{{ $lista->descripcion }}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{{ $lista->fecha_creacion }}</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>{{ $lista->id_usuario }}</td>
        </tr>
    </table>
    <a href="{{ route('listas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection