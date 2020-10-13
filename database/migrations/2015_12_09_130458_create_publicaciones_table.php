<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('padre_id')->nullable();
            $table->string('idioma',10)->nullable();
            $table->integer('tipopublicacion_id')->unsigned();
            $table->foreign('tipopublicacion_id')->references('id')->on('tipospublicaciones');
            $table->timestamp('fecha')->nullable();
            $table->string('titulo',300);
            $table->string('slug',300);
            $table->text('bajada')->nullable();
            $table->text('cuerpo');
            $table->string('portada',10)->nullable();
            $table->smallInteger('visitas')->nullable();
            $table->boolean('publicar')->default(0);
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
        Schema::drop('publicaciones');
    }
}
