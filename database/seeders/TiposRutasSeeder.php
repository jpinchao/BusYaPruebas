<?php

namespace Database\Seeders;

use App\Models\Tipo_ruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposRutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_ruta= new Tipo_ruta();
        $tipo_ruta->nombre = "Urbana-Ejecutiva";
        $tipo_ruta->descripcion = "Ruta al interior de la ciudad, que transita por zonas comerciales e industriales";
        $tipo_ruta->save();

        $tipo_ruta= new Tipo_ruta();
        $tipo_ruta->nombre = "Urbana-Basica";
        $tipo_ruta->descripcion = "Ruta al interior de la ciudad, que transita por zonas mas residenciales";
        $tipo_ruta->save();

        $tipo_ruta= new Tipo_ruta();
        $tipo_ruta->nombre = "Intermunicipal-Cafetera";
        $tipo_ruta->descripcion = "Ruta entre ciudades del eje cafetero";
        $tipo_ruta->save();

    }
}
