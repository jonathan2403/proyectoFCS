<?php

use Illuminate\Database\Seeder;

class ProduccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      FCS\Produccion::create([
        'id_proyecto' => '1',
        'id_publicacion' => '1'
        ]);
      FCS\Produccion::create([
        'id_proyecto' => '1',
        'id_publicacion' => '2'
        ]);
    }
}
