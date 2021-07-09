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
            $table->double('costo_total_compra',4,2);
            $table->string('unidad_monetaria',30);
            $table->text('direccion_entrega')->nullable();;
            $table->decimal('costo_transporte',4,2);
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
