<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'agencia_habitacion');
    }
}
