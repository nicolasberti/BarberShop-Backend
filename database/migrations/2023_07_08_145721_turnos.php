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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha')->unique();
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('telefono', 20);
            $table->string('estado', 20); // Disponible - En confirmación - Confirmado
            
            // Llave foranea del tipo de turno.
            $table->foreignId('tipoturno_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
