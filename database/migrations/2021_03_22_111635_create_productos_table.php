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
            $table->integer('usuario');
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('imagen');
            $table->text('lugar_origen_producto');
            $table->text('marca_producto');
            $table->text('color_producto');
            $table->text('material_producto');
            $table->double('longitud');
            $table->double('espesor');
            $table->text('dimension_producto');
            $table->text('dimension_producto_medida');
            $table->text('unidad_compra');
            $table->text('factor_unidad_compra');
            $table->text('unidad_venta');
            $table->text('factor_unidad_venta');
            $table->text('unidad_almacen');
            $table->text('factor_unidad_almacen');
            $table->double('precio_venta');
            $table->boolean('manejo_lote');
            $table->json('complementario');
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
