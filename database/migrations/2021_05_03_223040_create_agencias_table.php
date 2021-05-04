<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table) {
          $table->id();
          $table->integer('nit_emisor');
          $table->string('razon_social_emisor',50);
          $table->string('municipio',30);
          $table->bigInteger('telefono');
          $table->tinyInteger('codigo_sucursal');
          $table->string('direccion',70);
          $table->string('codigo_punto_venta',50);
          $table->string('actividad_economica',30);
          $table->string('codigo_autoverificador',30);
          $table->string('leyenda_factura',30);
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
        Schema::dropIfExists('agencias');
    }
}
