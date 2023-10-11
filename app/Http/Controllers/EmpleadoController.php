<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Tipo_empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados= Empleado::all();
        $tipos_empleado= Tipo_empleado::all();
        return view('cuenta_Admin.empleado.create', compact('empleados','tipos_empleado'));
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
        $empleado= new Empleado();
        $empleado->nombre=$request->nombre;
        $empleado->cedula=$request->cedula;
        $empleado->telefono=$request->telefono;
        $empleado->id_tipo_empleado=$request->id_tipo_empleado;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        $empleado= Empleado::find($empleado->id);
        return view('empleados.',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Empleado*/ $empleado)
    {
        $empleado= Empleado::find($empleado);
        $tipo = $empleado->id_tipo_empleado;
        $tipos_empleado = Tipo_empleado::all();
        return view('cuenta_Admin.empleado.edit',compact('empleado','tipos_empleado','tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Empleado*/ $empleado)
    {
        $empleado= Empleado::find($empleado);
        $empleado->nombre=$request->nombre;
        $empleado->cedula=$request->cedula;
        $empleado->telefono=$request->telefono;
        $empleado->id_tipo_empleado=$request->id_tipo_empleado;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*Empleado*/ $empleado)
    {
        $empleado= Empleado::find($empleado);
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
    
}