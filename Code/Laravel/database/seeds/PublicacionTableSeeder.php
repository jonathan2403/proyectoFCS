<?php

use Illuminate\Database\Seeder;

class PublicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Publicacion::create([
            'descripcion' => 'indicadores sociales de capital social',
         	  'tipo' => 'ri',
        	  'id_proyecto'=> '1',
              'id_opcion_grado'=> '1',
              'id_grupo'=> '1',
              'tipo_publicacion'=> 'i'
        	]);
        FCS\Publicacion::create([
            'descripcion' => 'vacunas de proyeccion social',
          	'tipo' => 're',
          	'id_proyecto'=> '1',
            'id_proyecto'=> '1',
            'id_opcion_grado'=> '1',
            'id_grupo'=> '1',
            'tipo_publicacion'=> 'i'
          	]);
    }
}
