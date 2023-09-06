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
        Schema::create('usuarios_has_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('matricula')->unique()->nullable();

            $table->unsignedBigInteger('rol_id');
            $table->timestamps();

            $table->unique(['usuario_id', 'rol_id']);

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('rol_id')->references('id')->on('roles_tabla')->onDelete('cascade');
            $table->foreign('matricula')->references('matricula')->on('alumnos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_has_roles');
    }
};
