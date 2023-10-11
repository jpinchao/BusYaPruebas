<?php

namespace Database\Seeders;

use App\Models\Viajes_cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViajesClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $viaje_cliente= new Viajes_cliente();
        $viaje_cliente->id_viaje= 1;
        $viaje_cliente->id_cliente= 1;
        $viaje_cliente->save();
    }
}
