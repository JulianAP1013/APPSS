<?php

namespace App\Services;

use App\Contracts\ListaServiceInterface;
use App\Models\Lista;

class ListaService implements ListaServiceInterface
{
    public function listarlista()
    {
        return Lista::all();
    }

    public function crearLista(array $data)
    {
        return Lista::create($data);
    }

    public function obtenerLista(int $id)
    {
        return Lista::find($id);
    }

    public function actualizarLista(Lista $lista, array $data)
    {
        $lista->update($data);
        return $lista;
    }

    public function desactivarLista(Lista $lista)
    {
        $lista->update(['activo' => false]);
        return $lista;
    }
}
