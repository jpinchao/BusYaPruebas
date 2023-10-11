<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Rol_usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios= User::whereNotNull('id_empleado')->get();
        $empleados= Empleado::all();
        $clientes= Cliente::all();
        $roles_usuario= Rol_usuario::all();
        return view('cuenta_Admin.usuario.create', compact('usuarios', 'empleados', 'clientes', 'roles_usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario=new User();
        $usuario->id_cliente=$request->id_cliente;
        $usuario->id_empleado=$request->id_empleado;
        $usuario->username=$request->username;
        //como se protege el de password
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        //esta campo es generado automaticamente
        $usuario->estado=$request->estado;
        $usuario->id_rol_usuario=$request->id_rol_usuario;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        $usuario= User::find($usuario->id);
        return view('cuenta_Admin.usuario.edit', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*User*/ $usuario)
    {
        $usuario= User::find($usuario);
        $empleados= Empleado::all();
        $emp= $usuario->id_empleado;
        $rol = $usuario->id_rol_usuario;
        //$clientes= Cliente::all();
        $roles_usuario= Rol_usuario::all();
        return view('cuenta_Admin.usuario.edit', compact('usuario','empleados','rol','emp','roles_usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,/*User*/ $usuario)
    {
        $usuario= User::find($usuario);
        $usuario->id_persona=$request->id_persona;
        $usuario->username=$request->username;
        //como se protege el de password
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        //esta campo es generado automaticamente
        //$usuario->estado=$request->estado;
        $usuario->id_rol_usuario=$request->id_rol_usuario;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*User*/ $usuario)
    {
        $usuario= User::find($usuario);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
