<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ahorro extends Model
{
    use HasFactory;

    // Indicamos la llave primaria personalizada
    protected $primaryKey = 'IdAhorro';

    // Campos permitidos para guardar desde el formulario
    protected $fillable = [
        'IdUsuario',
        'Monto',
        'Fecha',
        'Descripcion',
    ];
}