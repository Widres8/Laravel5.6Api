<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Users
            [
                'name' => 'list users',
                'display_name' => 'Listar Usuarios',
            ],
            [
                'name' => 'show users',
                'display_name' => 'Ver Usuarios',
            ],
            [
                'name' => 'create users',
                'display_name' => 'Crear Usuarios',
            ],
            [
                'name' => 'edit users',
                'display_name' => 'Editar Usuarios',
            ],
            [
                'name' => 'delete users',
                'display_name' => 'Eliminar Usuarios',
            ],
            [
                'name' => 'active users',
                'display_name' => 'Activar Usuarios',
            ],
            [
                'name' => 'manage roles',
                'display_name' => 'Administrar Roles Usuarios',
            ],
            // Roles
            [
                'name' => 'list roles',
                'display_name' => 'Listar Roles',
            ],
            [
                'name' => 'show roles',
                'display_name' => 'Ver Roles',
            ],
            [
                'name' => 'create roles',
                'display_name' => 'Crear Roles',
            ],
            [
                'name' => 'edit roles',
                'display_name' => 'Editar Roles',
            ],
            [
                'name' => 'delete roles',
                'display_name' => 'Eliminar Roles',
            ],
            [
                'name' => 'active roles',
                'display_name' => 'Activar Roles',
            ],
            [
                'name' => 'manage permissions',
                'display_name' => 'Administrar Permisos Roles',
            ],
            // Permissions
            [
                'name' => 'list permissions',
                'display_name' => 'Listar Permisos',
            ],
            [
                'name' => 'create permissions',
                'display_name' => 'Crear Permisos',
            ],
            [
                'name' => 'delete permissions',
                'display_name' => 'Eliminar Permisos',
            ],
        ];

        foreach ($permissions as $key => $value) {
            Permission::create($value);
        }
    }
}
