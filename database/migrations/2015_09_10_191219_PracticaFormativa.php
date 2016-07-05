<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PracticaFormativa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica_formativas', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_grupo')->unsigned();
            $table->string('nombre_practica',100);
            $table->string('semestre',10)->nulleable();
            $table->string('area',100)->nulleable();
            $table->string('objetivo_practica',500)->nulleable();
            $table->double('valor_rotacion',15,8)->nulleable();
            $table->double('valor_totalpractica',15,8)->nulleable();
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
        Schema::drop('practica_formativas');
    }
}
