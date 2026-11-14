<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdAsesoria';
    protected $fillable = ['IdUsuario', 'Nombre', 'Descripcion', 'FechaCreacion'];
}