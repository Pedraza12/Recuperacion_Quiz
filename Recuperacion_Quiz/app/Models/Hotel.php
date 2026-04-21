<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function categorias() 
    {
        return $this->belongsTo(Categoria::class);
    }
    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class);
    }
}
