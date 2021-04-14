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
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('imagen');
            $table->text('categoria_id');
            $table->text('tipo_id');
            $table->text('unidad_compra');
            $table->text('factor_unidad_compra');
            $table->text('unidad_venta');
            $table->text('factor_unidad_venta');
            $table->text('unidad_almacen');
            $table->text('factor_unidad_almacen');
            $table->json('tratamiento_fiscal');
            $table->double('precio_compra');
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
