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
        Schema::create('movimientos', function (Blueprint $table) {
    $table->id('IdMovimiento');
    $table->foreignId('IdUsuario')->constrained('usuarios', 'IdUsuario')->onDelete('cascade');
    $table->string('Concepto', 50)->nullable();
    $table->string('Descripcion', 50)->nullable();
    $table->double('Monto');
    $table->string('Tipo', 50);
    $table->timestamp('Fecha')->nullable();
    $table->foreignId('IdEgresos')->nullable()->constrained('egresos', 'IdEgresos')->onDelete('set null');
    $table->foreignId('IdIngresos')->nullable()->constrained('ingresos', 'IdIngresos')->onDelete('set null');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
