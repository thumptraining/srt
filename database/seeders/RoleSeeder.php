<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Coach']);
        $role3 = Role::create(['name' => 'Atleta']);
        $role4 = Role::create(['name' => 'Desactivado']);

        $permission1 = Permission::create(['name' => 'Editar usuarios'])->syncRoles([$role1]);
        $permission2 = Permission::create(['name' => 'Editar plataforma'])->syncRoles([$role1]);
        $permission3 = Permission::create(['name' => 'Crear y Editar menbresias'])->syncRoles([$role1]);
        $permission4 = Permission::create(['name' => 'Crear y editar comunicados'])->syncRoles([$role1, $role2 ]);
        $permission5 = Permission::create(['name' => 'Crear controles'])->syncRoles([$role1, $role2, $role3 ]);
        $permission6 = Permission::create(['name' => 'Crear ejercicios'])->syncRoles([$role1, $role2 ]);
        $permission7 = Permission::create(['name' => 'Crear Entrenamiento'])->syncRoles([$role1, $role2 ]);
        $permission8 = Permission::create(['name' => 'Ver Entrenamiento'])->syncRoles([$role1, $role2, $role3 ]);
        $permission9 = Permission::create(['name' => 'Desactivado'])->syncRoles([$role4]);
    }
}
