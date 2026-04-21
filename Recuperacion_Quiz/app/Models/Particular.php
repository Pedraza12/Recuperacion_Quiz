<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'habitacion_particular');
    }
}
