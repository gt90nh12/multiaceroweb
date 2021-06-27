<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesMovimientoInventariosTable extends Migration
{
  public function up()
  {
    Schema::create('transacciones_movimiento_inventarios', function (Blueprint $table){
      $table->id();
      $table->date('fecha_transaccion');
      $table->text('observaciones');
      $table->text('tipo_transaccion');
      $table->bigInteger('id_compras');
      $table->bigInteger('id_ventas');
      $table->bigInteger('id_almacen');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('transacciones_movimiento_inventarios');
  }
}
