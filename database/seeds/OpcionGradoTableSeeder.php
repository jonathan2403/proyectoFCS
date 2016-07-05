<?php

use Illuminate\Database\Seeder;

class OpcionGradoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         FCS\OpcionGrado::create([
        'descripcion' => 'promocion de la salud sexual y reproductiva',
        'tipo_opcion_grado'=> 'mr',
        'fecha_entrega_ci'=> '02-03-2015',
        'fecha_entrega_cr' => '02-03-2015',
        'fecha_entrega_jurado' => '02-03-2015',
        'fecha_entrega_max_jurado' => '02-03-2015',
        'fecha_entrega_real_jurado' => '02-03-2015',
        'concepto_1' => 'ap',
        'fecha_entrega_1' => '02-03-2015',
        'concepto_2' => 'aa',
        'fecha_entrega_2' => '02-03-2015',
        'concepto_3'=> 'na',
        'fecha_aprobacion' => '02-03-2015',
        'numero_acta' =>'001',
        'fecha_entrega_max_proyecto' => '02-03-2015',
        'fecha_entrega_informe_final' => '02-03-2015',
        'numero_acta_2' =>'002',
        'fecha_entrega_empaste'=> '02-03-2015',
        'finalizado'=> 'Si',
        'id_director'=> '1',
        'id_supervisor'=> '2',
        'evaluacion' => 'la'
        ]);

        FCS\OpcionGrado::create([
       'descripcion' => 'promocion de la salud sexual y reproductiva',
       'tipo_opcion_grado'=> 'pas',
       'id_entidad' => '1',
       'fecha_entrega_ci'=> '02-03-2015',
       'fecha_entrega_cr' => '02-03-2015',
       'fecha_entrega_jurado' => '22-03-2015',
       'fecha_entrega_max_jurado' => '02-03-2015',
       'fecha_entrega_real_jurado' => '02-03-2015',
       'concepto_1' => 'ap',
       'fecha_entrega_1' => '02-03-2015',
       'concepto_2' => 'aa',
       'fecha_entrega_2' => '02-03-2015',
       'concepto_3'=> 'na',
       'fecha_aprobacion' => '02-03-2015',
       'numero_acta' =>'001',
       'fecha_entrega_max_proyecto' => '02-03-2015',
       'fecha_entrega_informe_final' => '02-03-2015',
       'numero_acta_2' =>'002',
       'fecha_entrega_empaste'=> '02-03-2015',
       'finalizado'=> 'Si',
       'id_director'=> '1',
       'id_supervisor'=> '2',
       'evaluacion'=>'me'
       ]);

    }
}
