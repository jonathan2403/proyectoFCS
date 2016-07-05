<?php

use Illuminate\Database\Seeder;

class ProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Profesor::create([
        	'cedula' => '86004224',
        	'primer_nombre' => 'maria',
        	'segundo_nombre'=> '',
        	'primer_apellido' => 'pinzon',
        	'segundo_apellido' => 'guevara',
        	'email' => 'maria@pinzon',
        	'telefono' => '3211233221'
        	]);
        FCS\Profesor::create([
        	'cedula' => '405042332',
        	'primer_nombre' => 'luz',
        	'segundo_nombre'=> 'maria',
        	'primer_apellido' => 'aponte',
        	'segundo_apellido' => 'garzon',
        	'email' => 'luz@aponte',
        	'telefono' => '3213288251'
        	]);
        FCS\Profesor::create([
            'cedula' => '12042332',
            'primer_nombre' => 'luz',
            'segundo_nombre'=> 'miryam',
            'primer_apellido' => 'tobon',
            'segundo_apellido' => 'ovalle',
            'email' => 'luz@tobon',
            'telefono' => ''
             ]);
    }
}
