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
            $table->string('apellido_paterno',25);
            $table->string('apellido_materno',25);
            $table->bigInteger('numero_documento_ci');
            $table->string('direccion',60);
            $table->bigInteger('telefono_movil');
            $table->integer('telefono_fijo')->nullable();
            $table->string('email',30)->nullable();
            $table->date('fecha_nacimiento');
            $table->string('genero',9)->nullable();
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
