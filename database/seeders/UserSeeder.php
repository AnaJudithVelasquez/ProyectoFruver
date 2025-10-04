<?php

// database/seeders/UserSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Ana Administradora',
            'email' => 'admin@fruver.com',
            'password' => Hash::make('password') // Contraseña: 'password'
        ]);

        $admin->assignRole('Administrador');
    }
}
