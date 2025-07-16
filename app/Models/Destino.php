<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio', // si tienes este campo en la migración
        'estado', // si tienes este campo en la migración
    ];
}



