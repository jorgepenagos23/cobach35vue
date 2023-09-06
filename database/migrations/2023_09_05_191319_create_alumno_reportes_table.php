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
        Schema::create('alumno_reportes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->date('fecha');

            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('reporte_id');

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios_has_roles');
            $table->foreign('reporte_id')->references('id')->on('reportes');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_reportes');
    }
};
