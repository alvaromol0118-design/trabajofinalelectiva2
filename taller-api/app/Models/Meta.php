<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdMeta';
    protected $fillable = ['IdUsuario', 'nombre_meta', 'monto_objetivo', 'monto_actual', 'porcentaje_ahorro', 'FechaCreacion', 'FechaMeta'];
}
