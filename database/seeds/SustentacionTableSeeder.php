<?php

use Illuminate\Database\Seeder;

class SustentacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Sustentacion::create([
        	'id_estudiante' => '160002434',
        	'id_opcion_grado' => '1'
        	]);
        FCS\Sustentacion::create([
        	'id_estudiante' => '18277',
        	'id_opcion_grado' => '1'
        	]);
        FCS\Sustentacion::create([
        	'id_estudiante' => '160002434',
        	'id_opcion_grado' => '1'
        	]);
    }
}
