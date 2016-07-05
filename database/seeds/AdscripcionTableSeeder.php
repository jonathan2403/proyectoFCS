<?php

use Illuminate\Database\Seeder;

class AdscripcionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Adscripcion::create([
        	'id_estudiante' => '1',
        	'id_grupo' => '1'
        	]);
        FCS\Adscripcion::create([
        	'id_estudiante' => '2',
        	'id_grupo' => '1'
        	]);
        FCS\Adscripcion::create([
        	'id_estudiante' => '2',
        	'id_grupo' => '2'
        	]);
        FCS\Adscripcion::create([
        	'id_estudiante' => '1',
        	'id_grupo' => '2'
        	]);
    }
}
