<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Tipo_vehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos= Vehiculo::all();
        $tipos_vehiculo= Tipo_vehiculo::all();
        // dd($vehiculos);
        return view('cuenta_Admin.vehiculo.create',compact('vehiculos','tipos_vehiculo'));
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
        $vehiculo= new Vehiculo();
        $vehiculo->placa=$request->placa;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->marca=$request->marca;
        $vehiculo->capacidad=$request->capacidad;
        //es automatico
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=$request->id_tipo_vehiculo;
        $vehiculo->save();
        return redirect()->route('vehiculos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        $vehiculo= Vehiculo::find($vehiculo->id);
        return view('vehiculo.',compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Vehiculo*/ $vehiculo)
    {
        // dd($vehiculo);
        $vehiculo= Vehiculo::find($vehiculo);
        //dd($vehiculo);
        $tipo= $vehiculo->id_tipo_vehiculo;
        $tipos_vehiculo= Tipo_vehiculo::all();
        //dd($tipo);
        return view('cuenta_Admin.vehiculo.edit',compact('vehiculo','tipos_vehiculo','tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Vehiculo*/ $vehiculo)
    {
        $vehiculo= Vehiculo::find(intval($vehiculo));
        $vehiculo->placa=$request->placa;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->marca=$request->marca;
        $vehiculo->capacidad=$request->capacidad;
        //es automatico
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=$request->id_tipo_vehiculo;
        $vehiculo->save();
        return redirect()->route('vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*Vehiculo*/ $vehiculo)
    {
        $vehiculo= Vehiculo::find($vehiculo);
        $vehiculo->delete();
        return redirect()->route('vehiculos.index');
    }

    public function generar_pdf(){ 
        $vehiculos= Vehiculo::all();
        $pdf = PDF\Pdf::loadView('cuenta_Admin.vehiculo.generar_pdf', compact('vehiculos'));
        return $pdf->download('vehiculos.pdf');
    }
}
