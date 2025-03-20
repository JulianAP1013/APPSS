<?php

namespace App\Contracts;

use App\Models\Usuario;
use Illuminate\Support\Arr;

interface UsuarioServiceInterface
{

    public function listarUsuarios();
    public function crearUsuarios(array $data);
    public function obtenerUsuarios(int $id);
    public function actualizarUsuarios(Usuario $usuario, array $data);
    public function desactivarUsuarios(Usuario $usuario);
}
