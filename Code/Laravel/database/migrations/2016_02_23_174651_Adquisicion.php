<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Adquisicion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adquisicion', function(Blueprint $table){
          $table->increments('id');
          $table->string('nombre_articulo')->default(NULL);
          $table->string('cantidad')->default(NULL);
          $table->string('valor_unidad')->default(NULL);
          $table->integer('id_proyecto')
              ->unsigned()
              ->nullable()
              ->deafult(NULL);
          $table->foreign('id_proyecto')
               ->references('id')
               ->on('proyecto')
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
        Schema::drop('adquisicion');
    }
}
