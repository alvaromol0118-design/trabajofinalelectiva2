<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('procesos', function (Blueprint $table) {
    $table->id('IdProceso');
    $table->foreignId('IdAhorro')->constrained('ahorros', 'IdAhorro')->onDelete('cascade');
    $table->foreignId('IdMeta')->constrained('metas', 'IdMeta')->onDelete('cascade');
    $table->foreignId('IdCuenta')->constrained('cuentas_financieras', 'IdCuenta')->onDelete('cascade');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procesos');
    }
};
