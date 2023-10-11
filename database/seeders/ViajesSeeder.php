<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use App\Models\Viaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $viaje= new Viaje();
        $viaje->id_ruta = 1;
        $viaje->id_conductor= 2;
        $viaje->id_vehiculo= 1;
        $viaje->fecha_salida= "2023-01-01 12:00:09";
        $viaje->fecha_llegada= "2023-01-02 03:00:00";
        //no es un campo que se ingrese, mas bien seria calculado
        $viaje->cupos_disponibles= Vehiculo::find($viaje->id_vehiculo)->capacidad;
        $viaje->costo= 236000;
        $viaje->save();
    }
}
