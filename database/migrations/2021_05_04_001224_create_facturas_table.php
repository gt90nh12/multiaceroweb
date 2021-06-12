<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero_factura');
            $table->date('fecha_emicion');
            $table->tinyInteger('codigo_metodo_pago');
            $table->string('codigo_control');
            $table->unsignedBigInteger('id_ventas')->unique();
            $table->foreign('id_ventas')->references('id')->on('ventas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('facturas');
    }
}
