<?php

namespace App\Http\Controllers;

use App\Models\Rol_usuario;
use Illuminate\Http\Request;

class RolUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles_usuario= Rol_usuario::all();
        return view('cuenta_Admin.rolUsuario.create', compact('roles_usuario'));
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
        $rol_usuario= new Rol_usuario();
        $rol_usuario->nombre=$request->nombre;
        $rol_usuario->descripcion=$request->descripcion;
        $rol_usuario->save();
        return redirect()->route('rolUsuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rol_usuario $rol_usuario)
    {
        $tipo_ruta= Rol_usuario::find($rol_usuario->id);
        return view('roles_usuario.', compact('tipo_ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Rol_usuario*/ $rol_usuario)
    {
        $rol_usuario= Rol_usuario::find($rol_usuario);
        return view('cuenta_Admin.rolUsuario.edit', compact('rol_usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Rol_usuario*/ $rol_usuario)
    {
        $rol_usuario= Rol_usuario::find($rol_usuario);
        $rol_usuario->nombre=$request->nombre;
        $rol_usuario->descripcion=$request->descripcion;
        $rol_usuario->save();
        return redirect()->route('rolUsuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*Rol_usuario*/ $rol_usuario)
    {
        $rol_usuario= Rol_usuario::find($rol_usuario);
        $rol_usuario->delete();
        return redirect()->route('rolUsuario.index');
    }
}
