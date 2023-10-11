<?php

namespace Database\Seeders;

use App\Models\Parada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parada = new Parada();
        $parada->id_ruta = 1;
        $parada->nombre = "Estadio Palogrande Inferior";
        $parada->ubicacion = "[-75.48752725,5.06567008]";
        $parada->posicion = 1;
        $parada->save();

        $parada = new Parada();
        $parada->id_ruta = 1;
        $parada->nombre = "Curva CAI";
        //Corregir, esta repetida
        $parada->ubicacion = "[-75.48752725,5.06567008]";
        $parada->posicion = 2;
        $parada->save();

        $parada = new Parada();
        $parada->id_ruta = 1;
        $parada->nombre = "Mall plaza";
        $parada->ubicacion = "[-75.48752725,5.06567008]";
        $parada->posicion = 3;
        $parada->save();

    }
}
