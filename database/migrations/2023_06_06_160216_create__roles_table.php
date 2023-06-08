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
        Schema::create('_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empleado')->nullable(false);
            $table->unsignedBigInteger('id_area')->nullable(false);
            $table->string('rol')->nullable(false);
            $table->foreign('id_empleado')->references('id_empleado')->on('_empleado');
            $table->foreign('id_area')->references('id_area')->on('_area');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_roles');
    }
};
