<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function(Blueprint $table){
            $table->increments('id');
            $table->string('sigla');
            $table->string('descripcion');
            $table->enum('tipo', array('i', 'e', 'ps'));
            $table->enum('categoria', array('a', 'b', 'c', 'd'));
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_profesor')
                  ->references('id')
                  ->on('profesores')
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
        Schema::drop('grupo');
    }
}
