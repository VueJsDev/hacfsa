<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificacionpostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificacionpostulantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('postulante_id')->unsigned();
            $table->foreign('postulante_id')->references('id')->on('postulantes')->onDelete('cascade');
            $table->integer('tipocertificacion_id')->unsigned();
            $table->foreign('tipocertificacion_id')->references('id')->on('tipocertificaciones');
            $table->string('horasdesarrolladas',20)->nullable();
            $table->string('puntaje',10)->nullable();
            $table->string('rutafotocopia',1000)->nullable();
            $table->string('usuario_alta',50)->nullable();
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
        Schema::drop('certificacionpostulantes');
    }
}
