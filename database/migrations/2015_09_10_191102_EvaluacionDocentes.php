<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionDocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_docentes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->integer('valor')->unsigned()->nulleable();
            $table->string('nota',250)->nulleable();
            $table->foreign('id_profesor')
                  ->references('id')
                  ->on('profesores')
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
        Schema::drop('evaluacion_docentes');
    }
}
