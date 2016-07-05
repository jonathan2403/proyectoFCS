<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EncuentroGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentros_grupos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_encuentro');
            $table->enum('tipo_grupo', array('i', 'e', 'ps'));
            $table->string('fecha_realizacion')->default(NULL);
            $table->enum('modalidad', array('poster', 'oral'));
            $table->string('lugar')->default(NULL);
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
        //
    }
}
