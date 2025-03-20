@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Usurio</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $usuario->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $usuario->nombre }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $usuario->email }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $usuario->telefono }}</td>
        </tr>
    </table>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection