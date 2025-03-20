@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Cliente</h1>
    <form action="{{ route('listas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
            <label for="fecha">fecha creacion</label>
            <input type="date" class="form-control" id="fecha" name="fecha_creacion" required>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="number" class="form-control" id="usuario" name="id_usuario" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection