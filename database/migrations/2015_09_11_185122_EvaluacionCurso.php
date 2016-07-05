<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_cursos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_estudiante')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->double('nota_curso');
            $table->string('ubicacion',100);
            $table->string('objetivo_evaluacion',200);
            $table->string('observaciones',400);
            $table->string('sugerencias',400);
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
        Schema::drop('evaluacion_cursos');
    }
}
