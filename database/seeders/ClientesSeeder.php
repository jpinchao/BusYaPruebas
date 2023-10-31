<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = new Cliente();
        $cliente->nombre = "Pedro Perez";
        $cliente->cedula = "5646987";
        $cliente->telefono = "3159876363";
        $cliente->save();

        $cliente2 = new Cliente();
        $cliente2->nombre = "María Rodriguez";
        $cliente2->cedula = "7890123";
        $cliente2->telefono = "3101234567";
        $cliente2->save();

        $cliente3 = new Cliente();
        $cliente3->nombre = "Carlos Gómez";
        $cliente3->cedula = "9876543";
        $cliente3->telefono = "3009876543";
        $cliente3->save();

        $cliente4 = new Cliente();
        $cliente4->nombre = "Ana López";
        $cliente4->cedula = "5294767";
        $cliente4->telefono = "3187654321";
        $cliente4->save();
    }
}
