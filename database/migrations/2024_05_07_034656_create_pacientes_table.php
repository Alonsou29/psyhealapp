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
            $table->string('descripcion_problema')->nullable();
            $table->text('Biografia')->nullable();
            $table->unsignedBigInteger('id_user')->unique();

            //foreign keys
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            //$table->foreignId('id_psicologo')->constrained()->onDelete('set null');
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
