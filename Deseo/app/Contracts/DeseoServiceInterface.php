<?php

namespace App\Contracts;

use App\Models\Deseo;
use Illuminate\Support\Arr;

interface DeseoServiceInterface
{

    public function listarDeseos();
    public function crearDeseos(array $data);
    public function obtenerDeseos(int $id);
    public function actualizarDeseos(Deseo $deseo, array $data);
    public function desactivarDeseos(Deseo $deseo);
}
