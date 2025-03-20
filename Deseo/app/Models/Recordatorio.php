<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    protected $fillable = ['fecha_recordatorio', 'mensaje', 'id_deseo'];

    public function deseo()
    {
        return $this->belongsTo(Deseo::class);
    }
}
