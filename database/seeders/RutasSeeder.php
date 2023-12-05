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
        $ruta->nombre= "Lusitania-Universidad de Manizales";
        $ruta->origen="Lusitania";
        $ruta->destino="Universidad de Manizales";
        $ruta->save();

        $ruta = new Ruta();
        $ruta->nombre="San Sebastian-Centro";
        $ruta->origen="San Sebastian";
        $ruta->destino="Centro";
        $ruta->save();
    }
}
