<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@voyago.com',
            'role' => 'admin',
        ]);
        
        // Crear usuario administrador
        $this->call([
            AdminSeeder::class,
            AgenteSeeder::class,
        ]);
    }
}
