<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenProductosTable extends Migration
{
  public function up()
  {
    Schema::create('almacen_productos', function (Blueprint $table) {
      $table->id();
      $table->integer('cantidad_producto');
      $table->integer('stock_minimo');
      $table->integer('stock_maximo');
      $table->string('compra_por_recibir');
      $table->string('pendientes_en_ventas');
      $table->double('costo_promedio');
      $table->integer('id_productos');
      $table->integer('id_almacenes');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('almacen_productos');
  }
}
