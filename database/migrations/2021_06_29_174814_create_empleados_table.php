<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('cargo');
            $table->integer('telefono_fijo_corporativo');
            $table->integer('telefono_movil_corporativo');
            $table->string('foto');
            $table->time('horario_mañana_inicio');
            $table->time('horario_mañana_fin');
            $table->time('horario_tarde_inicio');
            $table->time('horario_tarde_fin');
            $table->date('fecha_inicio_actividad');
            $table->date('fecha_fin_actividad');
            $table->integer('experiencia_meses');
            $table->unsignedBigInteger('id_personas');
            $table->unsignedBigInteger('id_almacenes');
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
        Schema::dropIfExists('empleados');
    }
}
