<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
                                    
        \App\Models\User::factory()->create([
            'name' => 'Equipo',
            'surname' => 'Vista',
            'username' => 'Unomas',
            'email' => 'ej6_vista@factoriaF5.com',
            'password' => Hash::make('holamundo1234')
        ]);

    
    }
}
