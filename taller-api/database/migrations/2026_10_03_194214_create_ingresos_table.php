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
    Schema::create('ingresos', function (Blueprint $table) {
        $table->id('IdIngresos'); // PK del diagrama
        $table->foreignId('user_id')->nullable(); // FK IdUsuario
        $table->string('nombre', 50);
        $table->string('descripcion', 50)->nullable();
        $table->double('monto');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
