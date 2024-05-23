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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_problema');
            $table->string('fecha_ingreso');
            $table->unsignedBigInteger('id_user')->unique();
            $table->unsignedBigInteger('id_psicologo')->unique()->nullable();  
            //foreign keys 
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_psicologo')->references('id')->on('psicologo')->onDelete('cascade');
            //end fk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
