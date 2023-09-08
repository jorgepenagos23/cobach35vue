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
            $table->string('clacentro');
            $table->string('nombreplan');
            $table->string('clavemuni');
            $table->string('clavelocal');
            $table->string('matricula')->unique();
            $table->string('correo')->unique();;
            $table->string('nombres');
            $table->string('papellido');
            $table->string('sapellido');
            $table->string('curp');
            $table->string('telcasa');
            $table->string('nacionalidad');
            $table->string('foliosec');
            $table->string('grado');
            $table->string('grupo');
            $table->string('estatus');
            $table->string('celular');

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
