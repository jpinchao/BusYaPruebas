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
        $usuario->username= "empleado1";
        //como se protege el de password
        $usuario->password= Hash::make("empleado1");
        $usuario->email= "empleado1@gmail.com";
        //esta campo es generado automaticamente
        //$usuario->estado= 1;
        $usuario->id_rol_usuario= 2;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 3;
        $usuario->username= "empleado2";
        //como se protege el de password
        $usuario->password= Hash::make("empleado2");
        $usuario->email= "empleado2@gmail.com";
        //esta campo es generado automaticamente

        $usuario->id_rol_usuario= 2;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 3;
        $usuario->username= "cliente1";
        //como se protege el de password
        $usuario->password= Hash::make("cliente1");
        $usuario->email= "cliente1@gmail.com";
        //esta campo es generado automaticamente

        $usuario->id_rol_usuario= 3;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 3;
        $usuario->username= "cliente2";
        //como se protege el de password
        $usuario->password= Hash::make("cliente2");
        $usuario->email= "cliente2@gmail.com";
        //esta campo es generado automaticamente

        $usuario->id_rol_usuario= 3;
        $usuario->save();

        $usuario=new User();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 4;
        $usuario->username= "auditor1";
        //como se protege el de password
        $usuario->password= Hash::make("auditor1");
        $usuario->email= "auditor@auditor.com";
        //esta campo es generado automaticamente

        $usuario->id_rol_usuario= 4;
        $usuario->save();
    }
}
