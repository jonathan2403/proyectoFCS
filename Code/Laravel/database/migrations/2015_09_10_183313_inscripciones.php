<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_estudiante')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_estudiante')
                  ->references('id')
                  ->on('estudiantes')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_grupo')
                  ->references('id')
                  ->on('grupos')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
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
        Schema::drop('inscripciones');
    }
}
