<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SuperAdmin = Role::create(['name' => 'SuperAdmin']);

        Permission::create(['name' => 'docentes.index'])->syncRoles($SuperAdmin);
        Permission::create(['name' => 'docentes.store'])->syncRoles($SuperAdmin);
        Permission::create(['name' => 'docentes.create'])->syncRoles($SuperAdmin);
        Permission::create(['name' => 'docentes.show'])->syncRoles($SuperAdmin);
        Permission::create(['name' => 'docentes.update'])->syncRoles($SuperAdmin);
        Permission::create(['name' => 'docentes.destroy'])->syncRoles($SuperAdmin);
        Permission::create(['name' => 'docentes.edit'])->syncRoles($SuperAdmin);
    }
}
