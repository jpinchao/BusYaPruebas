<?php

namespace App\Http\Controllers;

use App\Models\Viajes_cliente;
use Illuminate\Http\Request;

class ViajesClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes_cliente= Viajes_cliente::all();
        return view('viajes_cliente.', compact('viajes_cliente'));
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
        $viaje_cliente= new Viajes_cliente();
        $viaje_cliente->id_viaje=$request->id_viaje;
        $viaje_cliente->id_cliente=$request->id_cliente;
        $viaje_cliente->save();
        return redirect()->route('viajes_cliente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viajes_cliente $viajes_cliente)
    {
        $viaje_cliente= Viajes_cliente::find($viajes_cliente->id);
        return view('viajes_cliente.', compact('viajes_cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viajes_cliente $viajes_cliente)
    {
        $viaje_cliente= Viajes_cliente::find($viajes_cliente->id);

        return view('viajes_cliente.', compact('viajes_cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viajes_cliente $viajes_cliente)
    {
        $viaje_cliente= Viajes_cliente::find($viajes_cliente->id);
        $viaje_cliente->id_viaje=$request->id_viaje;
        $viaje_cliente->id_cliente=$request->id_cliente;
        $viaje_cliente->save();
        return redirect()->route('viajes_cliente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viajes_cliente $viajes_cliente)
    {
        $viaje_cliente= Viajes_cliente::find($viajes_cliente->id);
        $viaje_cliente->delete();
        return redirect()->route('viajes_cliente.');
    }
}
