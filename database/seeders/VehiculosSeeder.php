<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehiculo= new Vehiculo();
        $vehiculo->placa="placa-000";
        $vehiculo->modelo="modelo-000";
        $vehiculo->marca="marca-000";
        $vehiculo->capacidad=32;
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=1;
        $vehiculo->save();

        $vehiculo= new Vehiculo();
        $vehiculo->placa="placa-001";
        $vehiculo->modelo="modelo-001";
        $vehiculo->marca="marca-001";
        $vehiculo->capacidad=20;
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=1;
        $vehiculo->save();
    }
}
