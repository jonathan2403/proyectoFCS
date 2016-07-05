<?php

use Illuminate\Database\Seeder;

class TipoProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      FCS\TipoProyecto::create([
          'nombre_tipoproyecto'=>'Educacion Continuada'
          ]);
      FCS\TipoProyecto::create([
          'nombre_tipoproyecto'=>'Proyecto Comunitario'
          ]);
      FCS\TipoProyecto::create([
          'nombre_tipoproyecto'=>'Evento'
          ]);
    }
}
