<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario');
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('logo');
            $table->text('direccion');
            $table->text('pais');
            $table->text('estado_departamento');
            $table->text('municipio');
            $table->text('correo_electronico');
            $table->text('telefono');
            $table->timestamps();
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
