<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movilidades', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->integer('id_evento')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->string('tipo_capacitacion',100);
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
            $table->foreign('id_periodo')
                  ->references('id')
                  ->on('periodos')
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
        Schema::drop('movilidades');
    }
}
