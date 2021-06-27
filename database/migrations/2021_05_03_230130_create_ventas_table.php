<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('monto_total');
            $table->string('monto_total_sujeto_iva');
            $table->double('descuento_total');
            $table->integer('cantidad_productos');
            $table->tinyInteger('codigo_moneda');
            $table->tinyInteger('tipo_cambio');
            $table->string('monto_total_moneda');
            $table->unsignedBigInteger('id_clientes');
            $table->unsignedBigInteger('id_sucursales');
            $table->unsignedBigInteger('id_cajeros');
            $table->foreign('id_clientes')->references('id')->on('clientes');
            $table->foreign('id_cajeros')->references('id')->on('cajeros');
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
        Schema::dropIfExists('ventas');
    }
}
