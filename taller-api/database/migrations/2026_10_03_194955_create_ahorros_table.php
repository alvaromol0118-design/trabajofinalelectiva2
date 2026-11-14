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
        Schema::create('ahorros', function (Blueprint $table) {
    $table->id('IdAhorro');
    $table->foreignId('IdUsuario')->constrained('usuarios', 'IdUsuario')->onDelete('cascade');
    $table->double('Monto');
    $table->date('Fecha')->nullable();
    $table->string('Descripcion', 50)->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ahorros');
    }
};
