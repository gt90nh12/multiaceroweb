<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesMovimientoInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones_movimiento_inventarios', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('id_usuario');
          $table->date('fecha_transaccion');
          $table->string('observaciones');
          $table->text('tipo_transaccion');
          $table->bigInteger('id_compras');
          $table->bigInteger('id_ventas');
          $table->bigInteger('id_movimientos');
          $table->bigInteger('id_devoluciones');
          $table->bigInteger('id_almacen_producto');
          $table->bigInteger('id_almacen');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacciones_movimiento_inventarios');
    }
}
