<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');//ejemplo "jugo de coco"
            $table->integer('cantidad');
            $table->integer('unidad_medida');
            $table->integer('descuento');
            $table->unsignedBigInteger('id_productos')->unique();
            $table->unsignedBigInteger('id_ventas')->unique();
            //note el de abajo posiblemente se cambie a Stock_productos OJO
            $table->foreign('id_productos')->references('id')->on('productos');//por el momento no elimina en cascada
            $table->foreign('id_ventas')->references('id')->on('ventas');//por el momento no elimina en cascada 
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
        Schema::dropIfExists('detalle_ventas');
    }
}
