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
        $tipos_ruta= Tipo_ruta::all();
        return view('cuenta_Admin.ruta.create',compact('rutas','tipos_ruta'));
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
        $ruta->id_tipo_ruta=$request->id_tipo_ruta;
        $ruta->nombre=$request->nombre;
        $ruta->save();
        return redirect()->route('rutasyhorarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruta $ruta)
    {
        $ruta= Ruta::find($ruta->id);
        return view('rutas.',compact('ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Ruta*/ $ruta)
    {
        $ruta= Ruta::find($ruta);
        $tipo= $ruta->id_tipo_ruta;
        $tipos_ruta= Tipo_ruta::all();
        return view('cuenta_Admin.ruta.edit',compact('ruta','tipos_ruta','tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Ruta*/ $ruta)
    {
        $ruta= Ruta::find($ruta);
        $ruta->id_tipo_ruta=$request->id_tipo_ruta;
        $ruta->nombre=$request->nombre;
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
