<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('eventos', function(Blueprint $table){
            $table->increments('id');
            $table->string('numero_consejo',100)->nullable();
            $table->string('fecha')
                 ->nullable()
                 ->default('');
            $table->string('nombre_evento',45);
            $table->string('descripcion_evento',45)->nullable();
            $table->string('horas_certificadas',45)->nullable();
            $table->string('beneficiados',45)->nullable();
            $table->string('departamento',45)->nullable();
            $table->string('ciudad',45)->nullable();
            $table->string('valor_efectivo',15,6)->nullable();
            $table->string('pais',45)->nullable();
            $table->string('beneficiados_administrativos',45)->nullable();
            $table->string('beneficiados_estudiantes',45)->nullable();
            $table->string('beneficiados_egresado',45)->nullable();
            $table->string('beneficiados_docentes',45)->nullable();
            $table->string('beneficiados_publico',45)->nullable();
            $table->string('beneficiados_privado',45)->nullable();
            $table->string('beneficiados_general',45)->nullable();
            $table->string('beneficiados_0_10',45)->nullable();
            $table->string('beneficiados_11_20',45)->nullable();
            $table->string('beneficiados_21_30',45)->nullable();
            $table->string('beneficiados_31_60',45)->nullable();
            $table->string('beneficiados_mayores_60',45)->nullable();
            $table->string('beneficiados_academia',45)->nullable();
            $table->string('beneficiados_alianza',45)->nullable();
            $table->string('beneficiados_sociedad',45)->nullable();
            $table->string('beneficiados_otros',45)->nullable();
            $table->string('beneficiados_hombres',45)->nullable();
            $table->string('beneficiados_mujeres',45)->nullable();
            $table->integer('id_tipoeventos')->unsigned();
            $table->foreign('id_tipoeventos')
                  ->references('id')
                  ->on('tipo_eventos')
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
        Schema::drop('eventos');
    }
}
