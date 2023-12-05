<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TiposVehiculosSeeder::class,
            VehiculosSeeder::class,
            RolesUsuarioSeeder::class,
            TiposEmpleadosSeeder::class,
            RutasSeeder::class,
            ParadasSeeder::class,
            ClientesSeeder::class,
            EmpleadosSeeder::class,
            ViajesSeeder::class,
            ViajesClientesSeeder::class,
            UsersSeeder::class

        ]);
    }
}
