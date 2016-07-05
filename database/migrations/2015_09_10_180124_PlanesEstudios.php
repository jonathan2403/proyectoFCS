<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlanesEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_estudios', function(Blueprint $table){
            $table->increments('id');
            $table->string('codigo',100)->unique();
            $table->date('fecha_resolucion')->nullable();
            $table->string('numero_resolucion',45)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->integer('id_programa')->unsigned();
            $table->foreign('id_programa')
                  ->references('id')
                  ->on('programas')
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
        Schema::drop('planes_estudios');
    }
}
