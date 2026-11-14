<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdMovimiento';
    protected $fillable = ['IdUsuario', 'Concepto', 'Descripcion', 'Monto', 'Tipo', 'Fecha', 'IdEgresos', 'IdIngresos'];
}
