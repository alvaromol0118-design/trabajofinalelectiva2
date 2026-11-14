<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdIngresos';

    protected $fillable = [
        'user_id',
        'nombre',
        'descripcion',
        'monto',
    ];
}