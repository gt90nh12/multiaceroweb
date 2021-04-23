<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',25);
            $table->string('apellidos',25);
            $table->string('sexo',25)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('tipo_documento',20);
            $table->bigInteger('num_documento');
            $table->integer('telefono_fijo')->nullable();
            $table->integer('telefono_movil')->nullable();
            $table->string('email',30)->nullable();
            //crea las columnas created_at y updated_at.
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
        Schema::dropIfExists('clientes');
    }
}
