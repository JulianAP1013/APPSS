<?php

namespace App\Contracts;

use App\Models\Recordatorio;
use App\Models\Usuario;

interface RecordatorioServiceInterface
{

    public function listarRecordatorio();
    public function crearRecordatorio(array $data);
    public function obtenerRecordatorio(int $id);
    public function actualizarRecordatorio(Recordatorio $recordatorio, array $data);
    public function desactivarRecordatorio(Recordatorio $recordatorio);
}
