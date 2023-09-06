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
        Schema::create('roles_has_permisos', function (Blueprint $table) {



        $table->unsignedBigInteger('usuario_id');
        $table->unsignedBigInteger('permiso_id');
        $table->foreign('usuario_id')->references('id')->on('usuarios');
        $table->foreign('permiso_id')->references('id')->on('permisos');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_has_permisos');
    }
};
