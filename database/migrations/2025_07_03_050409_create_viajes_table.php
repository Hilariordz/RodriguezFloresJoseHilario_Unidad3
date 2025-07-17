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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->enum('estado', ['planeado', 'activo', 'pasado']);
            // NUEVOS CAMPOS PARA LA APP INTERACTIVA
            $table->string('destino')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->date('fecha_regreso')->nullable();
            $table->integer('personas')->nullable();
            $table->decimal('precio', 10, 2)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
