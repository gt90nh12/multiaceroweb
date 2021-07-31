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
            $table->unsignedBigInteger('id_users');
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
