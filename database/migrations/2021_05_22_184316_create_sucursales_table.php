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
            // $table->string('cod_sucursal',7);
            $table->integer('usuario');
            $table->string('cod_empresa',7);
            $table->integer('numero_sucursal');
            $table->text('archivo_seleccionado');
            $table->text('codigo_punto_venta');
            $table->text('numero_autorizacion');
            $table->text('direccion');
            $table->text('pais');
            $table->text('estado_departamento');
            $table->text('ciudad');
            $table->integer('telefono');
            $table->text('correo');
            $table->text('descripcion');
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
        Schema::dropIfExists('sucursales');
    }
}
