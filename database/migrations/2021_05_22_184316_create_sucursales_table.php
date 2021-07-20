<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario');
            $table->text('nombre_sucursal');
            $table->text('archivo_seleccionado');
            $table->text('descripcion');
            $table->text('actividad');
            $table->text('codigo_punto_venta');
            $table->bigInteger('numero_autorizacion');
            $table->text('direccion');
            $table->text('pais');
            $table->text('estado_departamento');
            $table->text('municipio');
            $table->integer('telefono');
            $table->text('correo');
            $table->timestamps();
            $table->boolean('estado');
            $table->integer('id_empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursales');
    }
}
