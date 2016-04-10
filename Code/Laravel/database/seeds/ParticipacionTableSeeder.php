<?php

use Illuminate\Database\Seeder;

class ParticipacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      FCS\Participacion::create([
        'id_profesor' => '1',
        'id_proyecto' => '1'
        ]);
      FCS\Participacion::create([
        'id_profesor' => '2',
        'id_proyecto' => '1'
        ]);
      FCS\Participacion::create([
        'id_profesor' => '2',
        'id_proyecto' => '1'
        ]);
    }
}
