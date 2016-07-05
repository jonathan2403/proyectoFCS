<?php

use Illuminate\Database\Seeder;

class TipoEventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\TipoEvento::create([
            'nombre_tipoevento'=>'Foro'
            ]);
        FCS\TipoEvento::create([
            'nombre_tipoevento'=>'Ponencia'
            ]);
        FCS\TipoEvento::create([
            'nombre_tipoevento'=>'Simposio'
            ]);
    }
}
