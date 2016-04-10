<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FCS\User::create([
            'name'=>'Clara Rocio',
            'email'=>'investigacion',
            'dependencia'=>'Investigacion',
            'password'=> bcrypt('secreto')
            ]);
        FCS\User::create([
            'name'=>'Maria Cristina',
            'email'=>'proyeccion',
            'dependencia'=>'Proyeccion Social',
            'password'=> bcrypt('secreto')
            ]);
    }
}
