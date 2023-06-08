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
        Schema::create('_empleado', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombre')->nullable(false);
            $table->string('apellido')->nullable(false);
            $table->string('direccion')->nullable(false);
            $table->string('telefono')->nullable(false);
            $table->string('correo')->nullable(false);
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id_area')->on('_area');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_empleado');
    }
};
