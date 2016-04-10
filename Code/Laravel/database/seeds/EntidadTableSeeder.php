<?php

use Illuminate\Database\Seeder;

class EntidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Entidad::create([
          'nombre_entidad' => 'hospital departamental del meta',
          'tipo_entidad' => 'e'
          ]);

         FCS\Entidad::create([
          'nombre_entidad' => 'saludcoop',
          'tipo_entidad' => 'e'
          ]);

          FCS\Entidad::create([
          'nombre_entidad' => 'nueva EPS',
          'tipo_entidad' => 'e'
          ]);
          FCS\Entidad::create([
          'nombre_entidad' => 'Camilo Pinto',
          'tipo_entidad' => 'p'
          ]);
          FCS\Entidad::create([
          'nombre_entidad' => 'Clara Lopez',
          'tipo_entidad' => 'p'
          ]);
    }
}
