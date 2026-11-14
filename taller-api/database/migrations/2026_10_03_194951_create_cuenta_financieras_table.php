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
        Schema::create('cuentas_financieras', function (Blueprint $table) {
    $table->id('IdCuenta');
    $table->foreignId('IdUsuario')->constrained('usuarios', 'IdUsuario')->onDelete('cascade');
    $table->string('nombre', 50);
    $table->integer('saldo')->default(0);
    $table->string('Telefono', 50)->nullable();
    $table->date('FechaNacimiento')->nullable();
    $table->boolean('Estado')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuenta_financieras');
    }
};
