<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('residencia_id')->unsigned();
            $table->foreign('residencia_id')->references('id')->on('residencias')->onDelete('cascade');
            $table->string('apellido',100)->nullable();
            $table->string('nombre',150)->nullable();
            $table->string('tipodocumento',100)->nullable();
            $table->string('numerodocumento',100)->nullable();
            $table->timestamp('fechanacimiento')->nullable();
            $table->string('lugarnacimiento',200)->nullable();
            $table->string('domicilio',300)->nullable();
            $table->string('localidad',200)->nullable();
            $table->string('provincia',200)->nullable();
            $table->string('codigopostal',50)->nullable();
            $table->string('estadocivil',200)->nullable();
            $table->string('telefono',50)->nullable();
            $table->string('celular',50)->nullable();
            $table->string('email',200)->nullable();
            $table->string('universidad',400)->nullable();
            $table->string('anioingreso',10)->nullable();
            $table->string('anioegreso',10)->nullable();
            $table->string('fotoruta',1000)->nullable();
            $table->string('usuario_alta',50)->nullable();
            $table->string('promediogeneral',200)->nullable();
            $table->timestamp('fecha_alta')->nullable();
            $table->string('usuario_modi',50)->nullable();
            $table->timestamp('fecha_modi')->nullable();
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
        Schema::drop('postulantes');
    }
}
