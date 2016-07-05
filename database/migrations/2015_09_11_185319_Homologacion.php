<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Homologacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homologaciones', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_programaorigen')->unsigned();
            $table->string('tipo_homologacion',50);
            $table->double('nota',15,8)->nulleable();
            $table->foreign('id_grupo')
                  ->references('id')
                  ->on('grupos')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_programaorigen')
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
        Schema::drop('homologaciones');
    }
}
