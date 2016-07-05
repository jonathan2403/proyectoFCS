<?php

use Illuminate\Database\Seeder;

class ProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Proyecto::create([
        	'titulo_proyecto' => 'vigilancia en salud publica',
        	'tipo' => 'i',
        	'tipo_proyecto'=> 'cp',
        	'fecha_inicio' => '2015-01-01',
          'numero_acta' => '001',
          'fecha_avance1' => '2015-01-01',
          'fecha_avance2' => '2015-01-01',
          'fecha_avance3' => '2015-02-02',
          'fecha_informe_final' => '2015-03-04',
          'fecha_prorroga' => '2015-04-04',
          'bienes_adquiridos' => 'un computador',
          'valor_efectivo' => '2000',
          'ejecutado' => 'Si',
          'beneficiados' => '200',
          'id_investigador_principal' => '1'
        	]);
        FCS\Proyecto::create([
          'titulo_proyecto' => 'vigilancia en salud publica proyeccion',
          'tipo' => 'ps',
          'tipo_proyecto'=> 'pc',
          'fecha_inicio' => '2015-01-01',
          'numero_acta' => '001',
          'fecha_avance1' => '2015-01-01',
          'fecha_avance2' => '2015-01-01',
          'fecha_avance3' => '2015-02-02',
          'fecha_informe_final' => '2015-03-04',
          'fecha_prorroga' => '2015-04-04',
          'bienes_adquiridos' => 'portatil hp',
          'valor_efectivo' => '2000',
          'ejecutado' => 'Si',
          'beneficiados' => '200',
          'id_investigador_principal' => '1'
          ]);
    }
}
