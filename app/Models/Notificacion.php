<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta_id', 'descripcion', 'tiempo_estimado', 'user_id',
        // Agrega otros campos según sea necesario
    ];

    // Relación con el modelo Ruta
    public function ruta()
    {
        return $this->belongsTo(Ruta::class);
    }

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
