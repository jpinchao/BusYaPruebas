<?php

namespace Database\Seeders;

use App\Models\Tipo_vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_vehiculo= new Tipo_vehiculo();
        $tipo_vehiculo->nombre="Buseta";
        $tipo_vehiculo->descripcion="Descripcion vehiculo Buseta";
        $tipo_vehiculo->save();

        $tipo_vehiculo= new Tipo_vehiculo();
        $tipo_vehiculo->nombre="Bus";
        $tipo_vehiculo->descripcion="Descripcion vehiculo Bus";
        $tipo_vehiculo->save();

    }
}
