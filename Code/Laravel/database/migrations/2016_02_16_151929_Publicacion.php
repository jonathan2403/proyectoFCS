<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function(Blueprint $table){
            $table->increments('id');
            $table->string('descripcion');
            $table->enum('tipo_publicacion', array('ps','i'));
            $table->enum('tipo', array('ri', 're', 'li', 'ar', ''));
            $table->string('fecha_publicacion')->default(NULL)
            ->nullable();
            $table->integer('id_proyecto')
            ->unsigned()
            ->default(NULL)
            ->nullable();
            $table->integer('id_opcion_grado')
            ->unsigned()
            ->default(NULL)
            ->nullable();
            $table->integer('id_grupo')
            ->unsigned()
            ->default(NULL)
            ->nullable();
            $table->foreign('id_proyecto')
                  ->references('id')
                  ->on('proyecto')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_opcion_grado')
                  ->references('id')
                  ->on('opcion_grado')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
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
        Schema::drop('publicacion');
    }
}
