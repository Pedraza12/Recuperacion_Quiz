<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function agencias()
    {
        return $this->belongsToMany(Agencia::class, 'agencia_habitacion');
    }
    public function particulares()
{
    return $this->belongsToMany(Particular::class, 'habitacion_particular');
}
}
