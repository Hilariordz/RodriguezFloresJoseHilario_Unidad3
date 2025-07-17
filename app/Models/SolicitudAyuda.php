<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudAyuda extends Model
{
    protected $table = 'solicitudes_ayuda';
    protected $fillable = [
        'user_id', 'mensaje', 'estado', 'agente_id', 'respuesta'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function agente()
    {
        return $this->belongsTo(User::class, 'agente_id');
    }
} 