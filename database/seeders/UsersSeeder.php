<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 1;
        $usuario->username= "admin";
        //como se protege el de password
        $usuario->password= Hash::make("admin");
        $usuario->email= "admin@admin.com";
        //esta campo es generado automaticamente
        //$usuario->estado= 1;
        $usuario->id_rol_usuario= 1;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 2;
        $usuario->username= "emp";
        //como se protege el de password
        $usuario->password= Hash::make("emp");
        $usuario->email= "emp@emp.com";
        //esta campo es generado automaticamente
        //$usuario->estado= 1;
        $usuario->id_rol_usuario= 2;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 3;
        $usuario->username= "emp2";
        //como se protege el de password
        $usuario->password= Hash::make("emp2");
        $usuario->email= "emp2@emp.com";
        //esta campo es generado automaticamente
        $usuario->estado= 2;
        $usuario->id_rol_usuario= 2;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 3;
        $usuario->username= "cli";
        //como se protege el de password
        $usuario->password= Hash::make("cli");
        $usuario->email= "cli@cli.com";
        //esta campo es generado automaticamente
        $usuario->estado= 2;
        $usuario->id_rol_usuario= 3;
        $usuario->save();
    }
}
