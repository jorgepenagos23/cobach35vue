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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id(); /// id es matricula , se pude cambiarle matricula o agregar
            $table->string('matricula')->unique();
            $table->string('correo')->unique();;
            $table->string('nombre');
            $table->string('semestre');
            $table->string('grupo');
            $table->string('estatus');
            $table->string('telefono');
            $table->string('tutor_nombre');
            $table->string('tutor_telefono');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
