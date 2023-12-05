<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use App\Models\Tipo_ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas=Ruta::all();
        return view('cuenta_Admin.ruta.create',compact('rutas'));
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
        $ruta=new Ruta();
        $ruta->nombre=$request->nombre;
        $ruta->origen=$request->origen;
        $ruta->destino=$request->destino;
        $ruta->save();
        return redirect()->route('rutasyhorarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(/*Ruta*/ $ruta)
    {
        $ruta= Ruta::find($ruta);
        return view('rutas.',compact('ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Ruta*/ $ruta)
    {
        $ruta= Ruta::find($ruta);
        return view('cuenta_Admin.ruta.edit',compact('ruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Ruta*/ $ruta)
    {
        $ruta= Ruta::find($ruta);
        $ruta->nombre=$request->nombre;
        $ruta->origen=$request->origen;
        $ruta->destino=$request->destino;
        $ruta->save();
        return redirect()->route('rutasyhorarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*Ruta*/ $ruta)
    {
        $ruta= Ruta::find($ruta);
        $ruta->delete();
        return redirect()->route('rutasyhorarios.index');
    }
}
