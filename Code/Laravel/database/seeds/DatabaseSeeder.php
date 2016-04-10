<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(TipoEventosTableSeeder::class);
        $this->call(ProgramasTableSeeder::class);
        $this->call(ProfesorTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
        $this->call(EstudianteTableSeeder::class);
        $this->call(AdscripcionTableSeeder::class);
        $this->call(TipoProyectoTableSeeder::class);
        $this->call(ProyectoTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(AsistenciaTableSeeder::class);
        $this->call(EntidadTableSeeder::class);
        $this->call(OpcionGradoTableSeeder::class);
        $this->call(SustentacionTableSeeder::class);
        $this->call(RedConocimientoTableSeeder::class);
        $this->call(PublicacionTableSeeder::class);
       // $this->call(EducacionContinuaTableSeeder::class);
        $this->call(ParticipacionTableSeeder::class);
        Model::reguard();
    }
}
