<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AgenteSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Agente Voyago',
            'email' => 'agente@voyago.com',
            'password' => Hash::make('agentevoyago'),
            'role' => 'agente',
        ]);
    }
} 