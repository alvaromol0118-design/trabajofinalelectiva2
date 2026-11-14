<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaFinanciera extends Model
{
    use HasFactory;
    protected $table = 'cuentas_financieras';
    protected $primaryKey = 'IdCuenta';
    protected $fillable = ['IdUsuario', 'nombre', 'saldo', 'Telefono', 'FechaNacimiento', 'Estado'];
}
