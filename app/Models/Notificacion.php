<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta',
        'descripcion',
        'tiempo_estimado',
        // Agrega otros campos según sea necesario
    ];
}
