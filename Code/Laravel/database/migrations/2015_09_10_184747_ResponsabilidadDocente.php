<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResponsabilidadDocente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabilidad_docentes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_vinculacion')->unsigned();
            $table->integer('numero_estudiantes')->unsigned();
            $table->integer('horas_directas')->unsigned();
            $table->integer('horas_tutoria')->unsigned();
            $table->integer('horas_preparacion')->unsigned();
            $table->integer('numero_semanas')->unsigned();
            $table->integer('total_horas')->unsigned();
            $table->string('tipo_profesor',100)->nulleable();
            $table->foreign('id_profesor')
                  ->references('id')
                  ->on('profesores')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_grupo')
                  ->references('id')
                  ->on('grupos')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_vinculacion')
                  ->references('id')
                  ->on('vinculaciones')
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
        Schema::drop('responsabilidad_docentes');
    }
}
