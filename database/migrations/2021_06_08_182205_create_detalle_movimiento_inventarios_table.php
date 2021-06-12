<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleMovimientoInventariosTable extends Migration
{
  public function up()
  {
    Schema::create('detalle_movimiento_inventarios', function (Blueprint $table) {
      $table->id();
      $table->string('numero_transaccion');
      $table->double('costo');
      $table->string('cantidad');
      $table->double('descuento');
      $table->bigInteger('id_producto');
      $table->bigInteger('id_transacciones_movimiento_inventarios');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('detalle_movimiento_inventarios');
  }
}
