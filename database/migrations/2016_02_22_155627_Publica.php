<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publica', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_publicacion')->unsigned();
            $table->integer('id_estudiante')
              ->unsigned()
              ->nullable()
              ->default(NULL);
            $table->integer('id_profesor')
            ->unsigned()
            ->nullable()
            ->default(NULL);
            $table->foreign('id_estudiante')
                  ->references('id')
                  ->on('estudiantes')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_profesor')
                  ->references('id')
                  ->on('profesores')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_publicacion')
                   ->references('id')
                   ->on('publicacion')
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
        Schema::drop('publica');
    }
}
