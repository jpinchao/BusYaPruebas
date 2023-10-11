<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function store(Request $request)
    {
        //dd($request);
        $cliente= new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->cedula=$request->cedula;
        $cliente->telefono=$request->telefono;
        $cliente->save();


        $usuario=new User();
        $usuario->id_cliente=$cliente->id;
        $usuario->username=$request->username;
        //como se protege el de password
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        //esta campo es generado automaticamente
        //$usuario->estado=$request->estado;
        //$usuario->id_rol_usuario=$request->id_rol_usuario;
        $usuario->save();

        return redirect()->route('ingreso');

    }

}
