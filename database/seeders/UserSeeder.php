<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $adminUser = User::firstOrCreate(
            ['email' => 'admin@test.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('password'),
            ]
        );
        $adminUser->assignRole('Administrador');

        $editorUser = User::firstOrCreate(
            ['email' => 'editor@test.com'],
            [
                'name' => 'Editor',
                'password' => Hash::make('password'),
            ]
        );
        $editorUser->assignRole('Editor');

        $normalUser = User::firstOrCreate(
            ['email' => 'usuario@test.com'],
            [
                'name' => 'Usuario',
                'password' => Hash::make('password'),
            ]
        );
        $normalUser->assignRole('Usuario');

    }
}
