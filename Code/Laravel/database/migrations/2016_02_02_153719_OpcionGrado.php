<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OpcionGrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcion_grado', function(Blueprint $table){
            $table->increments('id');
            $table->string('descripcion')->default('');
            $table->enum('tipo_opcion_grado', array('mr', 'mi', 'epi', 'epps', 'pas', 'pos'));
            $table->enum('linea_investigacion', array('cu', 'sp', ''))->default('');
            $table->string('entidad')->default('');
            $table->enum('carta_director', array('Si', 'No'))
            ->nullable();
            $table->enum('carta_coordinador', array('Si', 'No'))
            ->nullable();
            $table->string('fecha_entrega_ci')
               ->default(NULL)
               ->nullable();
            $table->string('fecha_entrega_cr')->default(NULL)
            ->nullable();
            $table->string('fecha_entrega_jurado')->default(NULL)
            ->nullable();
            $table->string('fecha_entrega_max_jurado')->default(NULL)
            ->nullable();
            $table->string('fecha_entrega_real_jurado')->default(NULL)
            ->nullable();
            $table->enum('evaluacion', array('ap', 'na', 'aa', 'me', 'la', ''))->default('');
            $table->enum('concepto_1', array('ap', 'na', 'aa', ''))->default('');
            $table->string('fecha_entrega_1')->default(NULL)
            ->nullable();
            $table->enum('concepto_2', array('ap', 'na', 'aa', ''))->default('');
            $table->string('fecha_entrega_2')->default(NULL)
            ->nullable();
            $table->enum('concepto_3', array('ap', 'na', 'aa', ''))->default('');
            $table->enum('concepto_4', array('ap', 'na', 'aa', ''))->default('');
            $table->enum('concepto_5', array('ap', 'na', 'aa', ''))->default('');
            $table->enum('concepto_6', array('ap', 'na', 'aa', ''))->default('');
            $table->string('fecha_entrega_informe_2')->default(NULL)
            ->nullable();
            $table->string('fecha_entrega_informe_3')->default(NULL)
            ->nullable();
            $table->string('fecha_aprobacion')->default(NULL)
            ->nullable();
            $table->string('numero_acta')->default('');
            $table->string('fecha_entrega_max_proyecto')->default(NULL)
            ->nullable();
            $table->string('fecha_entrega_informe_final')->default(NULL)
            ->nullable();
            $table->string('numero_acta_2')->default('');
            $table->string('numero_acta_3')->default('');
            $table->string('fecha_entrega_empaste')->default(NULL)
            ->nullable();
            $table->string('fecha_entrega_certificado')->default(NULL)
            ->nullable();
            $table->enum('finalizado', array('Si', 'No'))
            ->nullable();
            $table->integer('id_director')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->integer('id_entidad')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->integer('id_externo')
                  ->unsigned()
                  ->nullable()
                 ->default(NULL);
            $table->integer('id_supervisor')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->integer('id_proyecto')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->integer('id_grupo')
                  ->unsigned()
                  ->nullable()
                  ->default(NULL);
            $table->foreign('id_director')
                  ->references('id')
                  ->on('profesores')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_supervisor')
                  ->references('id')
                  ->on('profesores')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_proyecto')
                  ->references('id')
                  ->on('proyecto')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_entidad')
                  ->references('id')
                  ->on('entidad')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_grupo')
                  ->references('id')
                  ->on('grupo')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('id_externo')
                  ->references('id')
                  ->on('entidad')
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
        Schema::drop('opcion_grado');
    }
}
