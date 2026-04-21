<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function hotel()
    {
        return $this->hasMany(Hotel::class);

    }
}
