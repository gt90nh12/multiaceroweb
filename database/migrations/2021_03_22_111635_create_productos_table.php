<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_producto',7);
            $table->integer('usuario');
            $table->string('cod_empresa',7);
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('imagen');
            $table->text('procedencia_producto');
            $table->text('marca_producto');
            $table->text('color_producto');
            $table->text('material_producto');
            $table->text('cod_caracteristicas');
            $table->text('unidad_comercial');
            $table->text('embalaje');
            $table->text('manejo_producto');
            $table->double('precio_venta');
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
        Schema::dropIfExists('productos');
    }
}
