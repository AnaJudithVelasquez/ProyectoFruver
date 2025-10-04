<?php

// database/seeders/RoleSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Administrador']);
        $sellerRole = Role::create(['name' => 'Vendedor']);

        Permission::create(['name' => 'manage products']);
        Permission::create(['name' => 'manage sales']);

        $adminRole->givePermissionTo(Permission::all());
    }
}