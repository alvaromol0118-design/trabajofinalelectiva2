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
        Schema::create('metas', function (Blueprint $table) {
    $table->id('IdMeta');
    $table->foreignId('IdUsuario')->constrained('usuarios', 'IdUsuario')->onDelete('cascade');
    $table->string('nombre_meta', 50);
    $table->double('monto_objetivo');
    $table->double('monto_actual')->default(0);
    $table->double('porcentaje_ahorro')->default(0);
    $table->timestamp('FechaCreacion')->nullable();
    $table->date('FechaMeta')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
