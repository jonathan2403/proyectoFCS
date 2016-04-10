<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JovenInvestigador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('joven_investigador', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_investigador');
            $table->enum('tipo', array('colciencias'));
            
            $table->integer('id_estudiante')
              ->unsigned()
              ->nullable()
              ->default(NULL);
            $table->integer('id_grupo')
              ->unsigned()
              ->nullable()
              ->default(NULL);
            $table->foreign('id_grupo')
              ->references('id')
              ->on('grupo')
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
        //
    }
}
