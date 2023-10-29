<?php

namespace Database\Seeders;

use App\Models\Tipo_empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_empleado= new Tipo_empleado();
        $tipo_empleado->nombre = "Administrador TI";
        $tipo_empleado->descripcion = "Persona con permisos administrativos y tecnologicos de la empresa";
        $tipo_empleado->save();

        $tipo_empleado= new Tipo_empleado();
        $tipo_empleado->nombre = "Conductor-Urbano";
        $tipo_empleado->descripcion = "Persona que conduce los vehiculos en el area Urbana";
        $tipo_empleado->save();

    }
}
