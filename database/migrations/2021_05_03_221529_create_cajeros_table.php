<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajeros', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado');
            $table->integer('experiencia_meses');
            $table->unsignedBigInteger('id_personas')->unique();
            $table->unsignedBigInteger('id_auths')->unique();
            $table->foreign('id_personas')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_auths')->references('id')->on('auths')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajeros');
    }
}
