<?php

use Illuminate\Database\Seeder;

class EducacionContinuaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        FCS\EducacionContinua::create([
        	'numero_consejo' => '200',
        	'fecha'=> '12-12-2010',
        	'nombre_educacion' => 'I simposio de regencia en farmacia',
        	'departamento' => 'meta',
        	'ciudad' => 'villavicencio',
        	'viaticos' => '500000',
        	'pais' => 'Colombia',
        	'horas_certificadas' => '100',
        	'beneficiados' => '3',
        	
        	]);
    }
}
