<?php

use Illuminate\Database\Seeder;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Evento::create([
        	'numero_consejo' => '200',
        	'fecha'=> '12-12-2010',
        	'nombre_evento' => 'I simposio de regencia en farmacia',
        	'descripcion_evento' => '',
        	'departamento' => 'Unillanos',
            'ciudad' => 'meta',
        	'valor_efectivo' => '500000',
        	'pais' => 'Colombia',
        	'horas_certificadas' => '100',
        	'beneficiados' => '3',
        	'id_tipoeventos' => '3',
            'beneficiados_administrativos' => '3',
            'beneficiados_estudiantes' => '3',
            'beneficiados_egresado' => '3', 
            'beneficiados_docentes' => '3', 
            'beneficiados_publico' => '3', 
            'beneficiados_privado' => '3',
            'beneficiados_general' => '3', 
            'beneficiados_0_10' => '3', 
            'beneficiados_11_20' => '3', 
            'beneficiados_21_30' => '3', 
            'beneficiados_31_60' => '3',
            'beneficiados_mayores_60' => '3',
            'beneficiados_academia' => '3',
            'beneficiados_alianza' => '3',
            'beneficiados_sociedad' => '3',
            'beneficiados_otros' => '3', 
            'beneficiados_hombres' => '3', 
            'beneficiados_mujeres' => '3'
        	]);
    }
}
