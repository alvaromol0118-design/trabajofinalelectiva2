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
        Schema::create('usuarios', function (Blueprint $table) {
    $table->id('IdUsuario');
    $table->string('Nombres', 100);
    $table->string('Apellidos', 100);
    $table->string('Correo', 50)->unique();
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
        Schema::dropIfExists('usuarios');
    }
};
