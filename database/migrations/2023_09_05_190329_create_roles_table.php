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
        Schema::create('roles_tabla', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); // nombre del rol ejemplo  director, subdirector , orientador , administrador , alumno estudiante
            $table->string('guard_nombre')->default('web'); // guard por defecto web
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_tabla');
    }
};
