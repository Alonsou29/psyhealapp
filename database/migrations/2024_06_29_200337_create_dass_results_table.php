<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDassResultsTable extends Migration
{
    public function up()
    {
        Schema::create('dass_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('ansiedad');
            $table->integer('depresion');
            $table->integer('estres');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dass_results');
    }
}
