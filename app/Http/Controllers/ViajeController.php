<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Ruta;
use App\Models\Vehiculo;
use App\Models\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $viajes = Viaje::all();
        $rutas = Ruta::all();
        $empleados = Empleado::all();
        $conductores = $empleados->filter(function ($empleado) {
            return $empleado->id_tipo_empleado == 2;
        });
        $vehiculos = Vehiculo::all();
        return view('cuenta_Admin.viaje.create', compact('viajes', 'rutas', 'conductores', 'vehiculos'));
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
        $viaje = new Viaje();
        $viaje->id_ruta = $request->id_ruta;
        $viaje->id_conductor = $request->id_conductor;
        $viaje->id_vehiculo = $request->id_vehiculo;
        $viaje->fecha_salida = $request->fecha_salida;
        $viaje->fecha_llegada = $request->fecha_llegada;
        //no es un campo que se ingrese, mas bien seria calculado
        $viaje->cupos_disponibles = Vehiculo::find($request->id_vehiculo)->capacidad;
        $viaje->costo = $request->costo;
        $viaje->save();
        return redirect()->route('viajes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {
        $viaje = Viaje::find($viaje->id);
        return view('viajes.', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Viaje*/$viaje)
    {
        $viaje = Viaje::find($viaje);
        $rutas = Ruta::all();
        $empleados = Empleado::all();
        $conductores = $empleados->filter(function ($empleado) {
            return $empleado->id_tipo_empleado == 2;
        });
        $id_ruta= $viaje->id_ruta;
        $id_conductor = $viaje->id_conductor;
        $id_vehiculo= $viaje->id_vehiculo;
        $vehiculos = Vehiculo::all();
        return view('cuenta_Admin.viaje.edit', compact('viaje', 'rutas', 'conductores', 'vehiculos', 'id_ruta', 'id_conductor', 'id_vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viaje $viaje)
    {
        $viaje = Viaje::find($viaje->id);
        $viaje->id_ruta = $request->id_ruta;
        $viaje->id_conductor = $request->id_conductor;
        $viaje->id_vehiculo = $request->id_vehiculo;
        $viaje->fecha_salida = $request->fecha_salida;
        $viaje->fecha_llegada = $request->fecha_llegada;
        // $viaje->cupos_disponibles=$request->cupos_disponibles;
        $viaje->costo = $request->costo;
        $viaje->save();
        return redirect()->route('viajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*Viaje*/$viaje)
    {
        $viaje = Viaje::find($viaje);
        $viaje->delete();
        return redirect()->route('viajes.index');
    }
}
