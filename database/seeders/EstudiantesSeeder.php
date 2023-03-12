<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\estudiantes;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('estudiantes')->insert([
            'nombre' => 'Admon',
            'Correo' => 'admon@robotics.com',
            'Contraseña' => 'Adm@2022 Rol: Administrativo',
        ]);

        Db::table('estudiantes')->insert([
            'nombre' => 'Tecmilenio',
            'Correo' => 'tecmilenio@robotics.com',
            'Contraseña' => 'Adm@2022 Rol: Profesor',
        ]);

        Db::table('estudiantes')->insert([
            'nombre' => 'Estudiante',
            'Correo' => 'student@robotics.com',
            'Contraseña' => 'Adm@2022 Rol: Estudiante',
        ]);
    }
}
