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
        Schema::create('asesorias', function (Blueprint $table) {
    $table->id('IdAsesoria');
    $table->foreignId('IdUsuario')->constrained('usuarios', 'IdUsuario')->onDelete('cascade');
    $table->string('Nombre', 50);
    $table->string('Descripcion', 50)->nullable();
    $table->timestamp('FechaCreacion')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesorias');
    }
};
