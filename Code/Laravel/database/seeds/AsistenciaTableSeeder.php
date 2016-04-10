<?php

use Illuminate\Database\Seeder;

class AsistenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Asistencia::create([
        	'id_profesor' => '1',
        	'id_evento' => '1'
        	]);
        FCS\Asistencia::create([
        	'id_profesor' => '2',
        	'id_evento' => '1'
        	]);
        FCS\Asistencia::create([
        	'id_profesor' => '3',
        	'id_evento' => '1'
        	]);
    }
}
