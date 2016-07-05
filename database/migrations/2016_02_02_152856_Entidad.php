<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad', function(Blueprint $table){
          $table->increments('id');
          $table->enum('tipo_entidad', array('p', 'e'));
          $table->string('nombre_entidad')->default(NULL);
          $table->string('correo')->nullable()->default('');
          $table->string('area_conocimiento')->nullable()->default('');
          $table->string('nivel_estudio')->nullable()->default('');
          $table->string('experiencia')->nullable()->default('');
          $table->string('telefono')->nullable()->default('');
          $table->string('direccion')->nullable()->default('');
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
        Schema::drop('entidad');
    }
}
