<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // investigacion
        FCS\Menu::create([
            'nombre'=>'Grupos',
            'ruta'=>'grupos',
            'imagen'=>'fa fa-users'
            ]);
        // proy social
        FCS\Menu::create([
            'nombre'=>'Tipos De Evento',
            'ruta'=>'tipo-evento',
            'imagen'=>'fa fa-clipboard'
            ]);
        //ninguno
        FCS\Menu::create([
            'nombre'=>'Usuarios',
            'ruta'=>'usuario',
            'imagen'=>'fa fa-user'
            ]);
        // ninguno
        FCS\Menu::create([
            'nombre'=>'Tipo De Vinculación',
            'ruta'=>'vinculacion',
            'imagen'=>'fa fa-credit-card'
            ]);
        // ninguno
        FCS\Menu::create([
            'nombre'=>'Programas',
            'ruta'=>'programa',
            'imagen'=>'fa fa-hospital-o'
            ]);
        // ninguno
        FCS\Menu::create([
            'nombre'=>'Nivel Estudio',
            'ruta'=>'nivel-estudio',
            'imagen'=>'fa fa-trophy'
            ]);
        // 7 - investigacion
        FCS\Menu::create([
            'nombre'=>'Opcion de Grado',
            'ruta'=>'opcion-grado-investigacion',
            'imagen'=>'fa fa-graduation-cap'
            ]);
        //ninguno
        FCS\Menu::create([
            'nombre'=>'Plan de Estudios',
            'ruta'=>'planes-estudio',
            'imagen'=>'fa fa-newspaper-o'
            ]);
        // 9 - investigacion
        FCS\Menu::create([
            'nombre'=>'Proyectos Docente',
            'ruta'=>'proyectos-investigacion',
            'imagen'=>'fa fa-wrench'
            ]);
        // proy social - 10
        FCS\Menu::create([
            'nombre'=>'Eventos',
            'ruta'=>'evento',
            'imagen'=>'fa fa-calendar-o'
            ]);
        // investigacion - 11
        FCS\Menu::create([
            'nombre'=>'Publicaciones',
            'ruta'=>'publicacion-investigacion',
            'imagen'=>'fa fa-book'
            ]);
        // los dos - 12
        FCS\Menu::create([
            'nombre'=>'Tipos de Proyecto',
            'ruta'=>'tipo-proyecto',
            'imagen'=>'fa fa-book'
                ]);
        //investigacion - 13
        FCS\Menu::create([
            'nombre'=>'Indicadores',
            'ruta'=>'indicadores-investigacion',
            'imagen'=>'fa fa-bar-chart'
            ]);
        // 14 - proyeccion
        FCS\Menu::create([
            'nombre'=>'Opcion de Grado',
            'ruta'=>'opcion-grado-proyeccion',
            'imagen'=>'fa fa-graduation-cap'
            ]);
        // 15 - proyeccion
        FCS\Menu::create([
            'nombre'=>'Proyectos',
            'ruta'=>'proyectos-proyeccion',
            'imagen'=>'fa fa-wrench'
            ]);
        //16 - proyeccion
        FCS\Menu::create([
          'nombre' => 'Externos',
          'ruta' => 'externo',
          'imagen'=>'fa fa-exchange'
          ]);
          //17 investigacion
        FCS\Menu::create([
          'nombre' => 'Red De Conocimiento',
          'ruta' => 'red-conocimiento',
          'imagen'=>'fa fa-exchange'
            ]);
        //18 proy
        FCS\Menu::create([
          'nombre' => 'Educacion Continua',
          'ruta' => 'educacion-continua',
          'imagen'=>'fa fa-exchange'
            ]);
        //19 proy
        FCS\Menu::create([
            'nombre'=>'Publicaciones',
            'ruta'=>'publicacion-proyeccion',
            'imagen'=>'fa fa-book'
            ]);
        //20 proy
        FCS\Menu::create([
            'nombre'=>'Grupo',
            'ruta'=>'grupo-proyeccion',
            'imagen'=>'fa fa-book'
            ]);
        //21 inves
        FCS\Menu::create([
            'nombre'=>'Encuentro de Grupos',
            'ruta'=>'encuentro-grupo',
            'imagen'=>'fa fa-book'
            ]);
        //22 inves
        FCS\Menu::create([
            'nombre'=>'Externos',
            'ruta'=>'externo',
            'imagen'=>'fa fa-book'
            ]);
        //23 inves
        FCS\Menu::create([
            'nombre'=>'Visibilidad',
            'ruta'=>'visibilidad',
            'imagen'=>'fa fa-book'
            ]);
        //23 jovenes inves
        FCS\Menu::create([
            'nombre'=>'Joven Inestigador',
            'ruta'=>'joven-investigador',
            'imagen'=>'fa fa-book'
            ]);
    }
}
