<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleHomologacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_homologaciones', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_programadestino')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->integer('id_homologacion')->unsigned();
            $table->foreign('id_programadestino')
                  ->references('id')
                  ->on('programas')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_estudiante')
                  ->references('id')
                  ->on('estudiantes')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_homologacion')
                  ->references('id')
                  ->on('homologaciones')
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
        Schema::drop('detalle_homologaciones');
    }
}
