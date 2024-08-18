<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleado = new Empleado();
        $empleado->nombre = "Carolina";
        $empleado->cedula = "116746565";
        $empleado->telefono = "7777777777";
        $empleado->id_tipo_empleado = 1;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->nombre = "Lucas";
        $empleado->cedula = "119336565";
        $empleado->telefono = "9999999999";
        $empleado->id_tipo_empleado = 2;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->nombre = "Miguel Angel";
        $empleado->cedula = "114346565";
        $empleado->telefono = "88888888888";
        $empleado->id_tipo_empleado = 2;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->nombre = "Juan";
        $empleado->cedula = "116746566";
        $empleado->telefono = "7777777777";
        $empleado->id_tipo_empleado = 1;
        $empleado->save();


    }
}
