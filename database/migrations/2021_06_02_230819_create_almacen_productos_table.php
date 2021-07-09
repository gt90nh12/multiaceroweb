<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario');
            $table->integer('cantidad_producto');
            $table->integer('stock_minimo');
            $table->integer('stock_maximo');
            $table->integer('compras_por_recibir')->nullable();;
            $table->integer('pendientes_en_venta')->nullable();;
            $table->integer('costo_promedio');
            $table->integer('id_productos');
            $table->integer('id_almacenes');
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
        Schema::dropIfExists('almacen_productos');
    }
}
