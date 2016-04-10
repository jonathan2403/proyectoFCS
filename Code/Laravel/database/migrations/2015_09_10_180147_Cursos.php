<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function(Blueprint $table){
            $table->increments('id');
            $table->string('codigo_curso',100);
            $table->string('nombre_curso',100);
            $table->string('tipo_curso',100);
            $table->string('semestre',10);
            $table->string('area',100)->nulleable();
            $table->string('creditos',100)->nulleable();
            $table->integer('id_planestudio')->unsigned();
            $table->foreign('id_planestudio')
                  ->references('id')
                  ->on('planes_estudios')
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
        Schema::drop('cursos');
    }
}
