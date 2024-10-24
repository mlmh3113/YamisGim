<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::create([

            'id' => 1,
            'user_id' => 2,
            'nombre' => 'Pedro',
            'edad' => 20,
            'apellidos' => 'Perez',
            'telefono' => '123456789',
            'password' => '123456',
            'peso' => 70,
            'altura' => 1.70,
            'IMC' => 25,
            'sexo' => 'masculino',
            'fotografia' => 'fotografia',
            'cuello' => 1.70,
            'cintura' => 1.70,
            'cadera' => 1.70,
            'pecho' => 1.70,
            'brazo_derecho' => 1.70,
            'abdomen' => 1.70,
            'pierna_derecha' => 1.70,
            'pantorrilla' => 1.70,
            'peso_ideal' => 1.70,
            'objetivo' => 'objetivo',


        ]);

        Estudiante::create([
            'id' => 2,
            'user_id' => 3,
            'nombre' => 'Maria',
            'edad' => 20,
            'apellidos' => 'Perez',
            'telefono' => '123456789',
            'password' => '123456',
            'peso' => 70,
            'altura' => 1.70,
            'IMC' => 25,
            'sexo' => 'masculino',
            'fotografia' => 'fotografia',
            'cuello' => 1.70,
            'cintura' => 1.70,
            'cadera' => 1.70,
            'pecho' => 1.70,
            'brazo_derecho' => 1.70,
            'abdomen' => 1.70,
            'pierna_derecha' => 1.70,
            'pantorrilla' => 1.70,
            'peso_ideal' => 1.70,
            'objetivo' => 'objetivo',
        ]);
    }
}
