<?php

use Illuminate\Database\Seeder;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\Programa::create([
            'nombre_programa'=>'Enfermeria'
            ]);
        FCS\Programa::create([
            'nombre_programa'=>'Regencia'
            ]);
        FCS\Programa::create([
            'nombre_programa'=>'Contaduria'
            ]);
    }
}
