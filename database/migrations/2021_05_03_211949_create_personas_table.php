<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',25);
            $table->string('apellidos',25);
            $table->bigInteger('num_documento_ci');
            $table->bigInteger('telefono_movil')->nullable();
            $table->integer('telefono_fijo')->nullable();
            $table->string('email',30)->nullable();
            $table->string('direccion',60);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('genero',25)->nullable();
            // crea las columnas created_at y updated_at.
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
        Schema::dropIfExists('personas');
    }
}
