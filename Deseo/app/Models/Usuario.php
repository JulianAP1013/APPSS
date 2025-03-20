<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'contraseña'];

    public function listas()
    {
        return $this->hasMany(Lista::class);
    }
}
