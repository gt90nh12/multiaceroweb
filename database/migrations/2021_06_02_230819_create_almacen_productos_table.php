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
            $table->integer('almacen_id');
            $table->integer('producto_id');
            $table->integer('cantidadproducto');
            $table->integer('stockminimo');
            $table->integer('stockmaximo');
            $table->integer('comprasporrecibir')->nullable();;
            $table->integer('pendientesporventa')->nullable();;
            $table->integer('costopromedio');
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
