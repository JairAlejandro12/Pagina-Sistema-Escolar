<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sistemas',
            'email' => 'isc@tesi.mx',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'apellido_Paterno' => 'No aplica',
            'apellido_Materno' => 'No aplica',
            'telefono' => 'No aplica',
            'telefono_Emergencia' => 'No aplica',
            'grado_Acedemico' => 'No aplica',
            'horas_x_Mes' => 'No aplica',
            'alergias' => 'No aplica',
            'enfermedades_Patologicas' => 'No aplica',
            'especialidad' => 'No aplica',
            'sub_Especialidad' => 'No aplica',
            'tipo_Rol' => 'SuperAdmin',
        ])->assignRole('SuperAdmin');
    }
}
