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
        Schema::create('estado_tarea', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tarea');
            $table->string('nombre_tarea')->nullable(false);
            $table->enum('estado', ['creada', 'asignada', 'finalizada'])->nullable(false);
            $table->unsignedBigInteger('id_empleado_asignado')->nullable(true);
            $table->foreign('id_tarea')->references('id_tarea')->on('tareas');
            $table->foreign('id_empleado_asignado')->references('id_empleado')->on('_empleado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_estadotareas');
    }
};
