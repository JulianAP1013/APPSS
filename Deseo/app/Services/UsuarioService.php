<?php

namespace App\Services;

use App\Contracts\UsuarioServiceInterface;
use App\Models\Usuario;


class UsuarioService implements UsuarioServiceInterface
{
    public function listarUsuarios()
    {
        return Usuario::all();
    }

    public function crearUsuarios(array $data)
    {
        return Usuario::create($data);
    }

    public function obtenerUsuarios(int $id)
    {
        return Usuario::find($id);
    }

    public function actualizarUsuarios(Usuario $usuario, array $data)
    {
        $usuario->update($data);
        return $usuario;
    }

    public function desactivarUsuarios(Usuario $usuario)
    {
        $usuario->update(['activo' => false]);
        return $usuario;
    }
}
