<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Participacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('participacion', function(Blueprint $table){
          $table->increments('id');
          $table->integer('id_proyecto')
              ->unsigned()
              ->nullable()
              ->deafult(NULL);
           $table->integer('id_educacion_continua')
              ->unsigned()
              ->nullable()
              ->deafult(NULL);
          $table->integer('id_profesor')
               ->unsigned()
               ->nullable()
               ->default(NULL);
          $table->integer('id_estudiante')
               ->unsigned()
               ->nullable()
               ->default(NULL);
           $table->foreign('id_educacion_continua')
               ->references('id')
               ->on('educacion_continua')
               ->onDelete('CASCADE')
               ->onUpdate('CASCADE');
          $table->foreign('id_proyecto')
               ->references('id')
               ->on('proyecto')
               ->onDelete('CASCADE')
               ->onUpdate('CASCADE');
          $table->foreign('id_profesor')
                ->references('id')
                ->on('profesores')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
          $table->foreign('id_estudiante')
                ->references('id')
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
        Schema::drop('participacion');
    }
}
