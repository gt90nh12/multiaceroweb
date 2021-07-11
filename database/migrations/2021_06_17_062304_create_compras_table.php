<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario');
            $table->text('descripcion_compra');
            $table->date('fecha_orden');
            $table->char('metodo_entrega',20);
            $table->decimal('costo_total_compra',7,2);
            $table->text('unidad_monetaria_costo_compra',7,2);
            $table->decimal('tipo_cambio_costo_compra',7,2);
            $table->text('direccion_entrega')->nullable();
            $table->decimal('costo_transporte',7,2);
            $table->date('fecha_esperada_recepion');
            $table->string('conformidad',30);
            $table->text('documentacion');
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
        Schema::dropIfExists('compras');
    }
}
