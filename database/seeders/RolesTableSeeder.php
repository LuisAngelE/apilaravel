<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Ejecuta las semillas de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'description' => 'Rol de administrador con acceso completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Coach',
                'description' => 'Rol de entrenador con permisos limitados',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Client',
                'description' => 'Rol de cliente con acceso mínimo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
