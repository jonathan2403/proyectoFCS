<?php

use Illuminate\Database\Seeder;

class EstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Estudiante::create([
        	'numero_documento' => '11221112',
        	'codigo_estudiante' => '160002434',
            'telefono' => '3112322211',
        	'primer_nombre' => 'pepito',
        	'segundo_nombre' => '',
        	'apellido_paterno' => 'perez',
        	'apellido_materno' => '',
        	'email' => 'pito@perez'
        	]);
        FCS\Estudiante::create([
        	'numero_documento' => '7399811',
        	'codigo_estudiante' => '18277',
            'telefono' => '3112324444',
        	'primer_nombre' => 'pedro',
        	'segundo_nombre' => '',
        	'apellido_paterno' => 'picapiedra',
        	'apellido_materno' => '',
        	'email' => 'pito@picapiedra'
        	]);
        FCS\Estudiante::create([
            'numero_documento' => '989811',
            'codigo_estudiante' => '1844',
            'telefono' => '3153782333',
            'primer_nombre' => 'gaston',
            'segundo_nombre' => '',
            'apellido_paterno' => 'bachelard',
            'apellido_materno' => '',
            'email' => 'gbachelard@gmail.com'
            ]);
    }
}
