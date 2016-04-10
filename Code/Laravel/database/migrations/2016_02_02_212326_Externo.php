<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Externo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('externo', function(Blueprint $table){
          $table->increments('id');
          $table->string('nombre_externo')->default(NULL);
          $table->enum('tipo_externo', array('p'))->nullable();
          $table->string('telefono')->nullable()->default(NULL);
          $table->string('direccion')->nullable()->default(NULL);
          $table->string('email')->nullable()->default(NULL);
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
        Schema::drop('externo');
    }
}
