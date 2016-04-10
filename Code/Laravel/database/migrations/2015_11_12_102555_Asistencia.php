<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asistencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_profesor')
              ->unsigned()
              ->nullable()
              ->deafult(NULL);
            $table->integer('id_estudiante')
              ->unsigned()
              ->nullable()
              ->deafult(NULL);
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_profesor')
                  ->references('id')
                  ->on('profesores')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_estudiante')
                  ->references('id')
                  ->on('estudiantes')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_evento')
                  ->references('id')
                  ->on('eventos')
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
        Schema::drop('asistencia');
    }
}
