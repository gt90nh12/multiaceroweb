<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesMovimientoInventariosTable extends Migration
{
  public function up()
  {
    Schema::create('transacciones_movimiento_inventarios', function (Blueprint $table) {
      $table->id();
      $table->date('fecha_transaccion');
      $table->string('observaciones');
      $table->bigInteger('id_compra');
      $table->bigInteger('id_venta');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('transacciones_movimiento_inventarios');
  }
}
