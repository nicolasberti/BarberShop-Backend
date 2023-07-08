<?php

namespace App\Models;

use App\Models\TipoTurno;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    public function tipoturno()
    {
        return $this->belongsTo(TipoTurno::class, 'tipoturno_id');
    }
    
}
