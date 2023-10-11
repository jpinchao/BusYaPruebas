<?php

namespace App\Http\Controllers;

use App\Models\Tipo_ruta;
use Illuminate\Http\Request;

class TipoRutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_ruta= Tipo_ruta::all();
        return view('cuenta_Admin.tipoRuta.create', compact('tipos_ruta'));
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
        $tipo_ruta= new Tipo_ruta();
        $tipo_ruta->nombre=$request->nombre;
        $tipo_ruta->descripcion=$request->descripcion;
        $tipo_ruta->save();
        return redirect()->route('tipoRuta.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_ruta $tipo_ruta)
    {
        $tipo_ruta= Tipo_ruta::find($tipo_ruta->id);
        return view('tipo_rutas.', compact('tipo_ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Tipo_ruta*/ $tipo_ruta)
    {
        $tipo_ruta= Tipo_ruta::find($tipo_ruta);
        return view('cuenta_Admin.tipoRuta.edit', compact('tipo_ruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Tipo_ruta*/ $tipo_ruta)
    {
        $tipo_ruta= Tipo_ruta::find($tipo_ruta);
        $tipo_ruta->nombre=$request->nombre;
        $tipo_ruta->descripcion=$request->descripcion;
        $tipo_ruta->save();
        return redirect()->route('tipoRuta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*Tipo_ruta*/ $tipo_ruta)
    {
        $tipo_ruta= Tipo_ruta::find($tipo_ruta);
        $tipo_ruta->delete();
        return redirect()->route('tipoRuta.index');
    }
}
