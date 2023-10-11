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
        $cliente->nombre = "Pedro";
        $cliente->cedula = "0000000000";
        $cliente->telefono = "8888888888";
        $cliente->save();
    }
}
