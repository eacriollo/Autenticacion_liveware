<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'task.view',
            'task.create',
            'task.edit',
            'task.delete',
            'user.view',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'Administrador']);
        $editor = Role::firstOrCreate(['name' => 'Editor']);
        $usuario = Role::firstOrCreate(['name' => 'Usuario']);

        $admin->syncPermissions($permissions);

        $editor->syncPermissions([
            'task.view',
            'task.create',
            'task.edit',
            'task.delete',
        ]);

        $usuario->syncPermissions([
            'task.view',
        ]);
    }
}
