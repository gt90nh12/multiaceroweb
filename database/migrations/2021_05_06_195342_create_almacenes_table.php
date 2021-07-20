<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario');
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('imagen');
            $table->text('direccion');
            $table->text('telefono');
            $table->time('horario_abierto_m');
            $table->time('horario_cerrado_m');
            $table->time('horario_abierto_t');
            $table->time('horario_cerrado_t');
            $table->timestamps();
            $table->boolean('estado');
            $table->integer('id_sucursal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacenes');
    }
}
