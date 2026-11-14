<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdEgresos';
    protected $fillable = ['IdUsuario', 'Descripcion', 'Monto', 'FechaCreacion'];
}