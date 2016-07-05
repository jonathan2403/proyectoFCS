<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RedConocimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('red_conocimiento', function(Blueprint $table){
        $table->increments('id');
        $table->string('nombre')->default(NULL);
        $table->string('proposito')->default(NULL);
        $table->string('compromiso')->default(NULL);
        $table->string('telefono')->nullable()->default(NULL);
        $table->string('direccion')->nullable()->default(NULL);
        $table->string('email')->nullable()->default(NULL);
        $table->string('fecha_ultima_reunion')->default(NULL);
        $table->string('asistentes')
        ->nullable();
        $table->integer('id_responsable')
            ->unsigned()
            ->nullable()
            ->default(NULL);
        $table->foreign('id_responsable')
              ->references('id')
              ->on('profesores')
              ->onUpdate('CASCADE')
              ->onDelete('CASCADE');
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
      Schema::drop('red_conocimiento');
    }
}
