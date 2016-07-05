<?php

use Illuminate\Database\Seeder;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Grupo::create([
        	'sigla' => 'gesi',
        	'descripcion' => 'grupo estudio semillero de investigacion',
        	'tipo' => 'i',
            'categoria' => 'a',
        	'id_profesor' => '1'
        	]);
        FCS\Grupo::create([
        	'sigla' => 'favisa',
        	'descripcion' => 'familia vida y salud',
        	'tipo' => 'i',
            'categoria' => 'b',
        	'id_profesor' => '1'
        	]);
        FCS\Grupo::create([
        	'sigla' => 'sifar',
        	'descripcion' => 'semillero investigacion farmacia',
        	'tipo' => 'e',
            'categoria' => 'c',
        	'id_profesor' => '1' 
        	]);
         FCS\Grupo::create([
            'sigla' => 'sifar',
            'descripcion' => 'semillero investigacion ',
            'tipo' => 'ps',
            'id_profesor' => '2' 
            ]);
          FCS\Grupo::create([
            'sigla' => 'sifar',
            'descripcion' => 'semillero Interno',
            'tipo' => 'ps',
            'id_profesor' => '1' 
            ]);
    }
}
