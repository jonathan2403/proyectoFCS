<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducacionContinua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('educacion_continua', function(Blueprint $table){
            $table->increments('id');
            $table->string('numero_acta',100)->nullable();
            $table->string('fecha_aprobacion')
                 ->nullable()
                 ->default('');
            $table->string('fecha_inicio')
                 ->nullable()
                 ->default('');
            $table->string('area_conocimiento',45)->nullable();             
            $table->string('nombre',45);
            $table->string('horas_certificadas',45)->nullable();
            $table->string('beneficiados',45)->nullable();
            $table->string('ciudad',45)->nullable();
            $table->string('recurso',15,6)->nullable();
            $table->string('pais',45)->nullable();
            $table->string('departamento',45)->nullable();
            $table->string('recurso_humano',45)->nullable();
            $table->string('muebles_equipo',45)->nullable();
            $table->string('servicios',45)->nullable();
            $table->string('material',45)->nullable();
            $table->string('gastos_viaje',45)->nullable();
            $table->string('otros_gastos',45)->nullable();
            $table->integer('id_director')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->foreign('id_director')
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
        Schema::drop('educacion_continua');
    }
}
