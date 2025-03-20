<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deseo extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'prioridad', 'estado', 'fecha_agregado', 'id_lista'];

    public function lista()
    {
        return $this->belongsTo(Lista::class);
    }

    public function recordatorio()
    {
        return $this->hasMany(Recordatorio::class);
    }
}
