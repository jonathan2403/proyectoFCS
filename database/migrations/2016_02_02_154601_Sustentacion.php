<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sustentacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sustentacion', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_opcion_grado')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->foreign('id_opcion_grado')
                  ->references('id')
                  ->on('opcion_grado')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_estudiante')
                  ->references('codigo_estudiante')
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
        Schema::drop('sustentacion');
    }
}
