<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => '123456',
            'role' => 'admin'
        ],
        User::create([
            'id' => 2,
            'name' => 'Estudiante',
            'email' => 'estudiante@estudiante',
            'password' => '123456',
            'role' => 'estudiante'
        ]),
        User::create([
            'id' => 3,
            'name' => 'Estudiante2',
            'email' => 'estudiante2@estudiante2',
            'password' => '123456',
            
        ])
    
    );
    }
}
