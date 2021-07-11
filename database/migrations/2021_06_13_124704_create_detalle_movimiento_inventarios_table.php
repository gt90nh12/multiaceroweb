<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleMovimientoInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_movimiento_inventarios', function (Blueprint $table) {
            $table->id();
            $table->double('costo');
            $table->string('cantidad');
            $table->double('descuento')->nullable();
            $table->text('identificador_producto')->nullable();
            $table->bigInteger('id_producto');
            $table->bigInteger('id_transacciones_movimiento_inventarios');
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
        Schema::dropIfExists('detalle_movimiento_inventarios');
    }
}
