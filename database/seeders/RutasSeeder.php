<?php

namespace Database\Seeders;

use App\Models\Ruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ruta = new Ruta();
        $ruta->id_tipo_ruta= 1;
        $ruta->nombre= "Lusitania-Universidad de Manizales";
        $ruta->save();

        $ruta = new Ruta();
        $ruta->id_tipo_ruta=2;
        $ruta->nombre="San Sebastian-Centro";
        $ruta->save();

        $ruta = new Ruta();
        $ruta->id_tipo_ruta=3;
        $ruta->nombre="Manizales-La Dorada";
        $ruta->save();
    }
}
