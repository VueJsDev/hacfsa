<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('speciality', 50);
            $table->string('DNI', 8);
            $table->string('workplace', 50);
            $table->string('city', 50);
            $table->string('mail', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eventos');
    }
}
