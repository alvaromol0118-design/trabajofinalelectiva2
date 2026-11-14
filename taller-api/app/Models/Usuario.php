<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Indicamos la llave primaria del diagrama[cite: 2]
    protected $primaryKey = 'IdUsuario';

    // Campos permitidos para asignación masiva[cite: 1, 2]
    protected $fillable = [
        'Nombres',
        'Apellidos',
        'Correo',
        'Telefono',
        'FechaNacimiento',
        'Estado',
    ];

    // Convertir automáticamente el campo a tipo booleano
    protected $casts = [
        'Estado' => 'boolean',
        'FechaNacimiento' => 'date',
    ];
}