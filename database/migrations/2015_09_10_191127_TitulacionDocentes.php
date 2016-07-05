<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TitulacionDocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacion_docentes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_programa')->unsigned();
            $table->integer('id_nivelestudio')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->foreign('id_profesor')
                  ->references('id')
                  ->on('profesores')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_programa')
                  ->references('id')
                  ->on('programas')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_nivelestudio')
                  ->references('id')
                  ->on('nivel_estudios')
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
        Schema::drop('titulacion_docentes');
    }
}
