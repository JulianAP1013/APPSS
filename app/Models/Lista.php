<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'fecha_creacion', 'id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function deseos()
    {
        return $this->hasMany(Deseo::class);
    }
}
