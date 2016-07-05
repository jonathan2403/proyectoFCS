<?php

use Illuminate\Database\Seeder;

class RedConocimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      FCS\RedConocimiento::create([
          'nombre' => 'indicadores sociales de capital social',
          'proposito' => 'lograr un interes en las personas',
          'compromiso' => 'participar constantemente en las actividades',
          'telefono' => '1231123',
          'direccion' => 'calle falsa 123',
          'email'=> 'integrator@gmail.com',
          'fecha_ultima_reunion' => '02-03-2015',
          'asistentes' => '23',
          'id_responsable' => '1'
        ]);

    }
}
