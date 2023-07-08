<?php

namespace App\Models;

use App\Models\Turno;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoturno extends Model
{
    use HasFactory;

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }
}
