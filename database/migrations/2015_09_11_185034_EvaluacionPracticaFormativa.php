<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionPracticaFormativa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_practicaformativas', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_practicaformativa')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->double('nota_cognitiva',15,8);
            $table->string('indicadores_cognitivo',500);
            $table->double('nota_praxiologica',15,8);
            $table->string('indicadores_praxiologico',500);
            $table->double('nota_aptitudinal',15,8);
            $table->string('indicadores_aptitudinal',500);
            $table->double('nota_comunicativa',15,8);
            $table->string('indicadores_comunicativa',500);
            $table->string('observaciones_cognitva',500);
            $table->string('observaciones_praxiologica',500);
            $table->string('observaciones_aptitudinal',500);
            $table->string('observaciones_comunicativa',500);
            $table->string('observaciones_generales',500);
            $table->double('nota_definitiva',15,8);
            $table->date('fecha');
            $table->foreign('id_practicaformativa')
                  ->references('id')
                  ->on('practica_formativas')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_estudiante')
                  ->references('id')
                  ->on('estudiantes')
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
        Schema::drop('evaluacion_practicaformativas');
    }
}
