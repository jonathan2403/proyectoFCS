<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('numero_documento')->unsigned()->unique();
            $table->integer('codigo_estudiante')->unsigned()->unique();
            $table->string('telefono')->unique();
            $table->string('primer_nombre',100);
            $table->string('segundo_nombre',100)->nulleable();
            $table->string('apellido_paterno',100);
            $table->string('apellido_materno',100)->nulleable();
            $table->string('email')->unique();
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
        Schema::drop('estudiantes');
    }
}
