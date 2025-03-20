<?php

namespace App\Contracts;

use App\Models\Lista;

interface ListaServiceInterface
{

    public function listarLista();
    public function crearLista(array $data);
    public function obtenerLista(int $id);
    public function actualizarLista(Lista $lista, array $data);
    public function desactivarLista(Lista $lista);
}
