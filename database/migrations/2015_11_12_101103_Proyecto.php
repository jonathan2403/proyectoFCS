<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function(Blueprint $table){
            $table->increments('id');
            $table->string('titulo_proyecto');
            $table->string('tema_central')->nullable()->default('');
            $table->integer('id_red_conocimiento')
            ->unsigned()
            ->nullable()
            ->default(NULL);
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
            $table->string('tipo_beneficiado',45)->nullable();
            $table->string('poblacion_estudio',45)->nullable();
            $table->string('producto',45)->nullable();
            $table->enum('tipo', array('ps', 'i'));
            $table->enum('tipo_proyecto', array('cp', 'ccr', 'cc', 'cct', 'cre', 'pc', ''))
                  ->nullable()
                  ->default('');
            $table->string('fecha_inicio')
                  ->nullable()
                  ->default('');
            $table->string('numero_acta')
                  ->nullable()
                  ->default('');
            $table->string('fecha_avance1')
                  ->nullable()
                  ->default('');
            $table->string('fecha_avance2')
                  ->nullable()
                  ->default('');
            $table->string('fecha_avance3')
                  ->nullable()
                  ->default('');
            $table->string('fecha_informe_final')
                  ->nullable()
                  ->default('');
            $table->string('fecha_prorroga')
                  ->nullable()
                  ->default('');
            $table->string('bienes_adquiridos')
                  ->nullable()
                  ->default('');
            $table->string('valor_efectivo')
                  ->nullable()
                  ->default('');
            $table->string('beneficiados')
                  ->nullable()
                  ->default('');
            $table->enum('ejecutado', array('Si', 'No'));
            $table->integer('id_investigador_principal')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->foreign('id_investigador_principal')
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
        Schema::drop('proyecto');
    }
}
