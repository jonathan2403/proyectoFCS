<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // id 1 : investigacion
    // id 2 : proyeccion social
    public function run()
    {
        // grupos
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'1',
            'permiso'=>'1'
            ]);
        // tipo eventos
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'2',
            'permiso'=>'1'
            ]);
        // opcion grado - inv
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'7',
            'permiso'=>'1'
            ]);
        // proyectos - inv
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'9',
            'permiso'=>'1'
            ]);
        // eventos
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'10',
            'permiso'=>'1'
            ]);
        // public
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'11',
            'permiso'=>'1'
            ]);
        // tipos pro - inv
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'12',
            'permiso'=>'0'
                ]);
        // tipos pro - pro
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'12',
            'permiso'=>'0'
                ]);
        // indicadores - inv
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'13',
            'permiso'=>'1'
                ]);
        // Opcion grado - proy
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'14',
            'permiso'=>'1'
                ]);
        // Proyectos - proy
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'15',
            'permiso'=>'1'
                ]);
        // Proyectos - proy
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'16',
            'permiso'=>'1'
                ]);
        //invest
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'17',
            'permiso'=>'1'
              ]);
        //indicadores - Proyeccion
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'13',
            'permiso'=>'1'
              ]);
        //Edu-Continua Proyeccion
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'18',
            'permiso'=>'1'
              ]);
        //publicacion Proyeccion
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'19',
            'permiso'=>'1'
              ]);
        //grupo Proyeccion
        FCS\Permiso::create([
            'iduser'=>'2',
            'idmenus'=>'20',
            'permiso'=>'1'
              ]);
         //inves. encuentro grupos
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'21',
            'permiso'=>'1'
              ]);
        //inves. externos
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'22',
            'permiso'=>'1'
              ]);
        //inves - Visibilidad
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'23',
            'permiso'=>'1'
            ]);
         //joven-investigador
        FCS\Permiso::create([
            'iduser'=>'1',
            'idmenus'=>'24',
            'permiso'=>'1'
            ]);
        
    }
}
